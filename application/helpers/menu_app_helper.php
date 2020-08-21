<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ob_start();



function creted_qr($nilai){
  $CI =& get_instance();
  $config['cacheable']    = true; 
  $config['cachedir']     = './assets/'; 
  $config['errorlog']     = './assets/'; 
  $config['imagedir']     = './assets/img/qr_pengajuan'; 
  $config['quality']      = true;
  $config['size']         = '1024';  
  $config['black']        = array(224,255,255);  
  $config['white']        = array(70,130,180); 

  $CI->ciqrcode->initialize($config);
  $image_name=$nilai.'.png'; 
  $params['data'] =$nilai; 
  $params['level'] = 'H';  
  $params['size'] = 10;
  $params['savename'] = FCPATH.$config['imagedir'].$image_name; 
  $CI->ciqrcode->generate($params);  
}   

function main_menu($positionM,$level) {
  $ci = & get_instance();
  $query = $ci->db->query("SELECT id_menu, nama_menu, link, id_parent ,position,icon FROM menu where aktif='Ya' AND position='".$positionM."' AND locate('$level',level) > 0 order by urutan");
  $menu = array('items' => array(),'parents' => array());
  foreach ($query->result() as $menus) {
    $menu['items'][$menus->id_menu] = $menus;
    $menu['position'][$menus->position] = $menus->position;
    $menu['parents'][$menus->id_parent][] = $menus->id_menu;
  }
  if ($menu) {
    $result = build_main_menu(0, $menu);
    return $result;
  }else{
    return FALSE;
  }
}

function build_main_menu($parent, $menu) {
  $html = "";
  if (isset($menu['parents'][$parent])) {
    if ($parent=='0'){
      $html .= "<ul id='side-menu'>";
      if (isset($menu['position']['Bottom']) == "Bottom") {
        $html.="<li><a class='waves-effect' href='".base_url()."'  aria-expanded='false'><i class='icon-screen-desktop fa-fw'></i><span class='hide-menu'> Home</span></li>";
      }else{

      }
    }else{
      $html .= '<ul aria-expanded="false" class="collapse">';
    }
    foreach ($menu['parents'][$parent] as $itemId) {
      $icon = ($menu['items'][$itemId]->icon) ? '<i class="'.$menu['items'][$itemId]->icon.'"></i>' :'<i class="fa fa-list"></i>'; 

      if (!isset($menu['parents'][$itemId])) {
        if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
          $html .= "<li><a href='".strtolower($menu['items'][$itemId]->link)."'>".$icon."".$menu['items'][$itemId]->nama_menu."</a></li>";
        }else{
          if($menu['items'][$itemId]->id_parent == 0 ):
           $html .= "<li><a href='".strtolower(base_url().''.$menu['items'][$itemId]->link)."'>".$icon."<span  class='hide-menu'>".$menu['items'][$itemId]->nama_menu."</a></li>";
          else:
           $html .= "<li><a href='".strtolower(base_url().''.$menu['items'][$itemId]->link)."'>".$icon."<span>".$menu['items'][$itemId]->nama_menu."</a></li>";
          endif;
        }
      }
      if (isset($menu['parents'][$itemId])) {
        if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
          $html .= "<li><a class='waves-effect' href='".$menu['items'][$itemId]->link."' aria-expanded='false'>".$icon."<span class='hide-menu'>".$menu['items'][$itemId]->nama_menu."<span class='label label-rounded label-info pull-right'>3</span></span></a>";
        }else{
          $html .= "<li><a class='waves-effect' href='".$menu['items'][$itemId]->link."' aria-expanded='false'>".$icon."<span class='hide-menu'>".$menu['items'][$itemId]->nama_menu."<span class='pull-right'><i class='icon-arrow-left-circle'></i></span></span></a>";
        }
        $html .= build_main_menu($itemId, $menu);
        $html .= "</li>";
      }
    }
    $html .= "</ul>";
  }
  return $html;
}


function penomoran_surat()
{ 
 $CI=& get_instance();
 $CI->db->select("max(id_surat) as no_surat");
 $CI->db->from("tbl_surat_keluar");
 $data=$CI->db->get()->row();
 if($data->no_surat == NULL){
   $no_surat = 1; 
 }else{ 
   $no_surat = $data->no_surat;
 }        
 return $no_surat;
}

function catat_log($id_user,$url,$aktivitas,$ip_address,$browser){
  $CI =& get_instance();
  $data =array(  
    'id_user'=>$id_user,
    'url'=>$url,
    'aktivitasi'=>$aktivitas, 
    'tanggal'=>date("y-m-d H:I:S"),
    'ip_address'=>$ip_address,
    'browser'=>$browser
  );
  $CI->db->insert('histori',$data); 

}
