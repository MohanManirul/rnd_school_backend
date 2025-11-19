<?php
function buildtree($src_arr, $parent_id = 0, $tree = array())
{
    foreach($src_arr as $idx => $row)
    {
        if($row['parent_id'] == $parent_id)
        {
            asort($row);
            foreach($row as $k => $v)
                $tree[$row['menu_id']][$k] = $v;
            unset($src_arr[$idx]);
            $tree[$row['menu_id']]['submenu'] = buildtree($src_arr, $row['menu_id']);
        }
        
        
        
    }
    
    return $tree;
}


function load_view($view,$data=array()){
     
	$ci =&get_instance();
	$user_id = $ci->session->userdata('user_id');
	$user_group_id = $ci->db->where("id", $user_id)->get("user")->row()->group_id;
	
	if($user_id > 1){
	    $ci->db->where('ac.role_id', $user_group_id);
	    $ci->db->join("access_control ac", "ac.module_id=m.menu_id");
	}

	$ci->db->order_by("m.parent_id, m.ordering,  m.menu_id ASC");
	$moduleList=$ci->db->select("m.*")->get('menu m')->result_array();
    
	$mdata['menuArr'] = buildtree($moduleList);

	$sdata['school_info']=$ci->db->get('school_info')->row();
	
    $ci->load->view('template_header', $sdata);
    $ci->load->view('template_left', $mdata);
    $ci->load->view($view, $data);
    $ci->load->view('template_footer');
}

?>