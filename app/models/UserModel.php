<?php

class UserModel
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id_user DESC');
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahUser($data)
    {
        $query = "INSERT INTO users (nama_lengkap, username, password, role, is_active) VALUES (:nama_lengkap, :username, :password, :role, :is_active)";
        $this->db->query($query);

        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $this->db->bind('role', $data['role']);
        $this->db->bind('is_active', $data['is_active']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDataUser($data)
    {
        $query = "UPDATE users SET nama_lengkap = :nama_lengkap, username = :username, password = :password, role = :role, is_active = :is_active WHERE id_user = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id_user']);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $this->db->bind('role', $data['role']);
        $this->db->bind('is_active', $data['is_active']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteUser($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_user = :id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariUser()
    {
        $key = $_POST['key'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_lengkap LIKE :key OR username LIKE :key');
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}