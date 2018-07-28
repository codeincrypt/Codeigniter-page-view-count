function increment($id){
    $this->db->set('pageview', 'pageview+1', FALSE);
    $this->db->where('id', $id);
    $this->db->update('table');
}
