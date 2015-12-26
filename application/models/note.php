<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Note extends CI_Model {
  public function all()
  {
    return $this->db->query("SELECT * FROM notes")->result_array();
  }

  public function create($new_note)
  {
    $query = "INSERT INTO notes (title,description,created_at,updated_at) VALUES (?,?,NOW(),NOW())";
    $values = array($new_note['title'],$new_note['description']);
    return $this->db->query($query, $values);
  }

  public function update_title($new_note)
  {
    $query = "UPDATE notes 
          SET title = ?, updated_at = NOW()
          where id = ?";
      $values = array($new_note['title'],
                      $new_note['id']
                );
      return $this->db->query($query,$values);
  }

  public function update_description($new_note)
  {
    $query = "UPDATE notes 
          SET description = ?, updated_at = NOW()
          where id = ?";
      $values = array($new_note['description'],
                      $new_note['id']
                );
      return $this->db->query($query,$values);
  }

  public function delete_note($new_note)
  {
    $query = "DELETE from notes WHERE id = ?";
    $values = array($new_note['id']);
    return $this->db->query($query,$values);
  }
}
?>