<?php
defined('myeshop') or die('������ ��������!');
if($_FILES['galleryimg']['name'][0]){
  
    for($i = 0; $i < count($_FILES['galleryimg']['name']); $i++){
    
    $error_gallery = "";
                      
    if($_FILES['galleryimg']['name'][$i]){

    $galleryimgType = $_FILES['galleryimg']['type'][$i]; // ��� �����
    $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // ������ ���������� ����������
        
    // ���������� ��������                    
    $imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['galleryimg']['name'][$i]));
    //����� ��� ��������
    $uploaddir = '../uploads_images/';
    //����� ��������������� ��� �����
    $newfilename = $_POST["form_type"].'-'.rand(100,500).'.'.$imgext;
    //���� � ����� (�����.����)
    $uploadfile = $uploaddir.$newfilename;
     
     
    if(!in_array($galleryimgType, $types)){
    $error_gallery = "<p id='form-error'>���������� ���������� - .gif, .jpg, .png</p>";
    $_SESSION['answer'] = $error_gallery;
    continue;  
        }                   
      
    if (empty($error_gallery))
    {  
                             
    if(@move_uploaded_file($_FILES['galleryimg']['tmp_name'][$i], $uploadfile)){
                                
         		mysql_query("INSERT INTO uploads_images(products_id,image)
						VALUES(						
                            '".$id."',
                            '".$newfilename."'                              
						)",$link);                        
        

     }else{
         $_SESSION['answer'] = "������ �������� �����."; 
       }
       
    
    }                                

}
    


}
}
?>