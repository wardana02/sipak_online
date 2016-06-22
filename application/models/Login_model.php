<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public $db_tabel = 'user';

    public function load_form_rules()
    {
        $form_rules = array(
                            array(
                                'field' => 'username',
                                'label' => 'Username',
                                'rules' => 'required'
                            ),
                            array(
                                'field' => 'password',
                                'label' => 'Password',
                                'rules' => 'required'
                            ),
        );
        return $form_rules;
    }

    public function validasi()
    {
        $form = $this->load_form_rules();
        $this->form_validation->set_rules($form);

        if ($this->form_validation->run())
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    // cek status user, login atau tidak?
    public function cek_user()
    {
        $username = $this->input->post('username');
        $q        = $this->input->post('password');

        //untuk mengatasi injection
        $a = mysql_real_escape_string($username);
        $w = mysql_real_escape_string($q);
        $b = sha1($w);
        //echo("$username $password");exit();


        $query = $this->db->query("SELECT 
            *
            FROM user 
            where username='$a' AND password='$b'
            AND aktif='1'");
        if ($query->num_rows() == 1)
        {
            $keyword = explode('_', $a);
            if ($keyword[1]=='') { 
                $area = "AND ps_kelurahan='$keyword[0]'"; 
            }else{
                $area = "AND ps_alamat='$keyword[0]' AND ps_rw='$keyword[1]' "; 
            }

            if($query->row()->previlage == "DUKCAPIL"){$area = "";}

            //untuk menentukan previlage approval dibawahnya.
            $iam = $query->row()->previlage;
            if($iam=='DUKCAPIL'){$you="KELURAHAN";}
            elseif($iam=='KELURAHAN'){$you="RW";}
            
            
            $data = array(  
                            'who'       => "ADMIN",
                            'login'     => TRUE,
                            'status'    => $query->row()->previlage,
                            'under'     => $you,
                            'id_user'   => $query->row()->id_user,
                            'nama_user' => $query->row()->nama_user,
                            'jabatan'   => $query->row()->jabatan,
                            'wilayah'   => $area,
                            'last_log' => $query->row()->last_log
                            );

            // buat data session jika login benar
            $this->session->set_userdata($data);
            $DT=date("Y-m-d H:i:s");
            $I = $query->row()->id_user;
            $this->db->query("UPDATE user SET last_log='$DT' WHERE id_user='$I'");
            
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(array('username' => '', 'login' => FALSE));
        $this->session->sess_destroy();
    }
}
/* End of file login_model.php */
/* Location: ./application/models/login_model.php */