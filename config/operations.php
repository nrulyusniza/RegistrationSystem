<?php 
    require_once('connadmin.php');
    $db = new connadmin();

    class crudfunction extends connadmin
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $adminname = $db->check($_POST['First']);
                $adminemail = $db->check($_POST['Last']);
                $adminpassword = $db->check($_POST['adminpassword']);
                //$UserEmail = $db->check($_POST['UserEmail']);

                if($this->insert_record($adminname,$adminemail,$adminpassword))
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Successfully Saved. </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed. </div>';
                }
            }
        }


        // Insert Record in the Database Using Query    
        function insert_record($a,$b,$c,$d)
        {
            global $db;
            $query = "insert into admin (adminname,adminemail, adminpassword) values('$a','$b','$c','$d')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

       // View Database Record
       
        public function view_record()
        {
            global $db;
            $query = "select * from admin";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }


        // Get Particular Record
        public function get_record($adminid)
        {
            global $db;
            $sql = "select * from admin where admin_id='$adminid'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }



     


        // Update Record
        public function update()
        {
            global $db;

            if(isset($_POST['btn_update']))
            {
                $adminid = $_POST['adminid'];
                $adminname = $db->check($_POST['First']);
                $adminemail = $db->check($_POST['Last']);
                $adminpassword = $db->check($_POST['adminpassword']);
                $Email = $db->check($_POST['UserEmail']);

                if($this->update_record($adminid,$adminname,$adminemail,$adminpassword,$Email ))
                {
                    $this->set_messsage('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
                    header("location:view.php");
                }
                else
                {   
                    $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
                }

               
            }
        } 
       

        // Update Function 2
        public function update_record($adminid,$first,$Last,$User,$Email)
        {
            global $db;
            $sql = "update admin set adminname='$first', adminemail='$Last', adminpassword='$User', Email='$Email' where admin_id='$adminid'";
            $result = mysqli_query($db->connection,$sql);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        // Set Session Message
        public function set_messsage($msg)
        {
            if(!empty($msg))
            {
                $_SESSION['Message']=$msg;
            }
            else
            {
                $msg = "";
            }
        }

        // Display Session Message
        public function display_message()
        {
            if(isset($_SESSION['Message']))
            {
                echo $_SESSION['Message'];
                unset($_SESSION['Message']);
            }
        } 

    }
?>