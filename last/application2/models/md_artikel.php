<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Md_artikel extends CI_Model
{
	private $nama_tabel = 'artikel';
	private $kunci = 'idArtikel';

/* mulai menampilkan semua berita dengan pagination */
	public function Get_all($limit = '0')
	{
		$this->db->not_like('status', 'deleted');
		$this->db->order_by('idArtikel', 'desc');
		$this->db->limit($limit);
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}
/* akhir menampilakan semua berita dengan pagination */

/* mulai menampilkan jumlah semua berita */
	public function Get_count()
	{	
		$this->db->where_not_in('status','deleted');
		$this->db->order_by('tanggal', 'desc');
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}
/* akhir menampilakn jumlah semua berita */

	public function Get_date()
	{
		$this->db->select('tanggal');
		$this->db->distinct();
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}

/* mulai menampilkan ID berita yang terakhir diinputkan */
	public function Get_last()
	{
		$query = $this->db->insert_id();
		return $query;
	}
/* akhir menampilakn ID berita yang terakhir diinputkan */

/* mulai menampilkan berita dengan parameter ('<kode berita>','<status berita>') */
	public function Get_id($kode,$status)
	{
		$this->db->where($this->kunci, $kode);
		if($status == ""){

		} else {
			$this->db->where('status',$status);
		}
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}
/* akhir menampilkan berita dengan parameter ('<kode berita>','<status berita>') */

	public function Get_id_news($kode)
	{
		$this->db->where($this->kunci, $kode);
		$this->db->where('status', 'publish');
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}

/* mulai menampilkan berita dengan parameter berita dan status */
	public function Get_limit($limit,$status)
	{
		if($limit == ""){

		} else {
			$this->db->limit($limit);
		}

		if($status == ""){

		} else {
			$this->db->where('status', $status);
		}
		$this->db->order_by('tanggal', 'desc');
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}
/* akhir menampilkan berita dengan parameter berita dan status */

/* mulai pencarian berita dengan parameter ('<kata kunci>','<status berita>') */
	public function Get_like($post,$status)
	{
		$this->db->like('title', $post);
		$this->db->or_like('news', $post);
		if($status == ""){

		} else {
			$this->db->where('status',$status);
		}
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}
/* akhir pencarian berita dengan parameter ('<kata kunci>','<status berita>') */

	public function Get_trash()
	{
		$this->db->where('status', 'deleted');
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}

	public function Get_status($kode)
	{
		$this->db->where('status', $kode);
		$this->db->where('status !=', 'deleted');
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}

	public function Insert($post)
	{
		$query = $this->db->insert($this->nama_tabel, $post);
		return $query;
	}

	public function Update($kode, $post)
	{
		$this->db->where($this->kunci, $kode);
		$query = $this->db->update($this->nama_tabel, $post);
		return $query;
	}

	public function Delete($kode)
	{
		$this->db->where($this->kunci,$kode);
		$query = $this->db->delete($this->nama_tabel);
		return $query;
	}

		//DYNAMIC KOLOM
	public function Get_dinamic($isiKolom,$limit)
	{
		$this->db->limit($limit);
		$this->db->where('status','publish');
		$this->db->order_by('tanggal','DESC');
		$query = $this->db->get($this->nama_tabel);
		return $query->result();
	}

	public function Get_id_news_all($kode)
	{
		$this->db->where($this->kunci, $kode);
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}
	//pagination template needed
	public function Get_count_template()
	{
		$this->db->where('status','publish');
		$this->db->order_by('tanggal', 'desc');
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}
	public function Get_all_template($perpage,$record)
	{
		$this->db->where('status', 'publish');
		$this->db->order_by('tanggal', 'desc');
		$this->db->limit($perpage,$record);
		$query = $this->db->get($this->nama_tabel);
		return $query;
	}
}

/* End of file : model_news.php */
/* Location : ./application/models/model_news.php */