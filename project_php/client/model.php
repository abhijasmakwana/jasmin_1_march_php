<?php

class model
{ 
	public $conn="";
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','bookcar');
	}
	
	function insert($tbl,$arr)
	{
		$col_arr=array_keys($arr);
		$col=implode(",",$col_arr);
		
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr);
		
		$ins="insert into $tbl($col) value ('$value')"; // query
		$run=$this->conn->query($ins); // run
		return $run;
		
	}
	function select($tbl)
	{
		$sel="select * from $tbl";
		$run=$this->conn->query($sel); 

        while($fetch=$run->fetch_object())
        {
			$arr[]=$fetch;
		}			
		if(!empty($arr))
		{
			return $arr;
		}
		
	}
	function Select_where($tbl,$where)
	{
		$col_arr=array_keys($where);//$where=array("unm"=>$unm,"pass"=>enc_pass);
		$value_arr=array_values($where);
		
	    $Sel="Select * from $tbl where 1=1";
		$i=0;
		foreach($where as $d)
		{
			$Sel.=" and $col_arr[$i]='$value_arr[$i]'";
			$i++;
			
		}
		$run=$this->conn->query($Sel);//run
		return $run;
		
	}
	function delete_where($tbl,$where)
	{
		$col_arr=array_keys($where);//$where=array("unm"=>$unm,"pass"=>$enc_pass);
		$value_arr=array_values($where);
	
		$del="delete from $tbl where 1=1";
		$i=0;
		foreach($where as $d)
		{
			$del.=" and $col_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del); // run
		return $run;	
	}
	function update_where($tbl,$arr,$where)
	{
		$scol_arr=array_keys($arr);
		$svalue_arr=array_values($arr);
		

		$upd="update $tbl set ";
		$j=0;
		$count=count($arr);
		foreach($arr as $d)
		{
			if($count==$j+1)
			{
				$upd.=" $scol_arr[$j]='$svalue_arr[$j]'";
			}
			else
			{
				$upd.=" $scol_arr[$j]='$svalue_arr[$j]',";
				$j++;
			}
		}
		$col_arr=array_keys($where);
		$value_arr=array_values($where);
	
		$upd.=" where 1=1";
		$i=0;
		foreach($where as $d)
		{
			$upd.=" and $col_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd); // run
		return $run;	
	}
}	
		
$obj=new model;

?>