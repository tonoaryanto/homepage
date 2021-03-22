<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requestdemo extends CI_Controller {
	function __construct(){
		parent::__construct();
    }

	public function index()
	{
        $status = 0;

		$nama = $this->input->post('name');
		$company = $this->input->post('company');
		$email = $this->input->post('email');
		$code = str_replace("+","",$this->input->post('code'));
		$phone = str_replace("+","",$this->input->post('phone'));

        //Validasi
        $input = "";
        if($this->cek_karakter('text',strtolower($nama)) == 1){$status = 1; $input = "name";}
		if($this->cek_karakter('text',strtolower($company)) == 1 or $status == 1){$status = 1; $input = "company";}
		if($this->cek_karakter('email',strtolower($email)) == 1 or $status == 1){$status = 1; $input = "email";}
		if($this->cek_karakter('number',$code) == 1 or $status == 1){$status = 1; $input = "code phone";}
		if($this->cek_karakter('number',$phone) == 1 or $status == 1){$status = 1; $input = "number phone";}

		if($status == 1){
			echo json_encode([
				'status'  => false,
				'message' => "Incorrect input character or empty. please check again!"
				]);
			return;
		}
		//END Validasi

        $dtsend = "";
        $dtsend .= "&phonenumber=".$code.$phone;

        $rdtfarm = @file_get_contents("http://apidbo.anselljaya.com/setotp/cek?506173734f5450=416e73656c6c343831".$dtsend);
        //$rdtfarm = @file_get_contents("http://localhost/apidboansell/setotp?506173734f5450=416e73656c6c343831&phonenumber=".$dtsend);
        $dtfarm =  json_decode($rdtfarm);

        if($dtfarm->{'status'} == 1){
            $datadm = [
                'name' => $nama,
                'company' => $company,
                'email' => $email,
                'phonenumber' => $code.$phone
            ];
            $this->db->insert("data_demo", $datadm);
            echo json_encode([
				'status'  => true,
				'message' => "Demo request is being processed. Demo data will be sent to your email please wait."
				]);
        }else{
			echo json_encode([
				'status'  => false,
				'message' => "Invalid verification. Please send a WhatsApp message first for verification!"
				]);
        }
	}

    public function verif()
    {
        $status = 0;
        $phoneser = "6282111184578";
        $rawcode = $this->input->post('code');
        $rawextr2 = "";
		$extr2 = explode("+",$rawcode);
        for ($i=0; $i < count($extr2); $i++) {
            $rawextr2 = $rawextr2.$extr2[$i];
        }
        $code = $rawextr2;
        $rawphone = $this->input->post('phone');
        $phone = $code.$rawphone;

        $nama = $this->input->post('name');
		$company = $this->input->post('company');
		$email = $this->input->post('email');

        //Validasi
         $input = "";
         if($this->cek_karakter('number',strtolower($rawphone)) == 1 or $rawphone == ""){$status = 1; $input = "number phone";}
         if($this->cek_karakter('number',strtolower($code)) == 1 or $code == ""){$status = 1; $input = "code phone";}
         if($this->cek_karakter('email',strtolower($email)) == 1 or $email == "" or $status == 1){$status = 1; $input = "email";}
         if($this->cek_karakter('text',$company) == 1 or $company == "" or $status == 1){$status = 1; $input = "company";}
         if($this->cek_karakter('text',$nama) == 1 or $nama == "" or $status == 1){$status = 1; $input = "name";}
 
         if($status == 1){
             echo json_encode([
                 'status'  => false,
                 'message' => "Incorrect input character or empty. Please check again!"
                 ]);
             return;
         }
         //END Validasi 

        $cekdb = $this->db->query("SELECT * FROM data_demo WHERE phonenumber = '".$phone."' OR email = '".$email."'")->num_rows();
        if($cekdb > 0){
            echo json_encode([
                'status'  => false,
                'message' => "Your data has been registered before."
                ]);
            return;
        }

        $rdtfarm = @file_get_contents("http://apidbo.anselljaya.com/setotp?506173734f5450=496e69416e73656c6c3831&phonenumber=".$phone);
        //$rdtfarm = @file_get_contents("http://localhost/apidboansell/setotp?506173734f5450=496e69416e73656c6c3831&phonenumber=".$phone);
        $dtfarm =  json_decode($rdtfarm);
        if($dtfarm->{'status'} == 1){
            $dataini = hex2bin($dtfarm->{'data'});
            $datalink = "https://api.whatsapp.com/send?phone=".$phoneser."&text=OTP+".$dataini;

            echo json_encode([
                'status'  => true,
                'code' => "OTP ".$dataini,
                'phone' => $phone,
                'phoneser' => $phoneser,
                'link' => $datalink
                ]);
        }else{
            echo json_encode([
                'status'  => false,
                'message' => "Server not ready. Please send again!"
                ]);
        }
    }

    private function cek_karakter($var1,$var2)
	{
		if($var1 =='text'){
			return preg_match('/[^a-z0-9 ]/',$var2);
		}
		if($var1 =='number'){
			return preg_match('/[^0-9 \+]/',$var2);
		}
		if($var1 =='email'){
			return preg_match('/[^a-z0-9 \_\@\-\.]/',$var2);
		}
	}
}