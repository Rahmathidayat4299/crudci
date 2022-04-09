<?Php
Defined('BASEPATH') OR Exit('No Direct Script Access Allowed');

Class M_Mahasiswa Extends CI_Model {

    public function GetDataMahasiswa() {
        $this->db->select('*');
        $this->db->from("tb_mahasiswa");
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDataMahasiswa($Data) {
        $this->db->Insert('tb_mahasiswa', $Data);
    }

    public function EditDataMhs($Data,$id){
        $this->db->where('nim',$id);
        $this->db->update('tb_mahasiswa',$Data);
    }

    public function GetDataMhsDetail($id){
        $this->db->where('nim',$id);
        $query = $this->db->get('tb_mahasiswa');
        return $query->row();
    }

    public function DeleteDataMhs($id){
        $this->db->where('nim',$id);
        $this->db->delete('tb_mahasiswa');
    }

}

/* End Of File M_Mahasiswa.Php */
/* Location: ./Application/Models/M_Mahasiswa.Php */