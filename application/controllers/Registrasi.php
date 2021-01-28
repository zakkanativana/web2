<?php 

class Registrasi extends CI_Controller {
    public function index() {

            $this -> form_validation -> set_rules('nama','Nama','required',['required' => 'Nama Wajib Diisi !' ]);
            $this -> form_validation -> set_rules('username','Username','required', ['required' => 'Username Wajib Diisi !']);
            $this -> form_validation -> set_rules('password_1','Password','required|matches[password_2]',['required' => 'Password Wajib diisi', 'matches' => 'Password tidak cocok']);
            $this -> form_validation -> set_rules('password_2','Password','required|matches[password_1]');


            if ($this -> form_validation -> run() == FALSE ){
                $this -> load -> view('templates/header');
                $this -> load -> view('registrasi');
                $this -> load -> view('templates/footer');
            } else {
                $data = array(
                    'id' => '',
                    'nama' => $this -> input -> POST('nama'),
                    'username' => $this -> input -> POST('username'),
                    'password' => $this -> input -> POST('password_1'),
                    'role_id' => 2,
                );
                $this -> db -> INSERT('tb_user', $data);
                redirect('auth/login');
            }
       
    }
}

?>