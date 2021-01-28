<?php

function login ()
{ 
    
    $trueLogin = 'user'; //для проверки скрипта задаем правильный логин
    $truePassword = '11111111'; // и пароль
    $row['id'] = 1; //и ид пользователя в БД
    $row['salt'] = 'salt111'; // и соль для хеша
    
    if ($_POST['login'] != "" && $_POST['password'] != "") //проверяем заполнены ли поля    
    {       
        $login = $_POST['login']; 
        $password = $_POST['password'];

        //$sql = mysql_query("SELECT * FROM users WHERE login=$login"); //ищем пользователя      
        //if (mysql_num_rows($sql) == 1) //если нашлась 1 строка, значит пользователя существует 
        if($login==$trueLogin)
        {           
            //$row = mysql_fetch_assoc($sql);             
            //if (md5(md5($password).$row['salt']) == $row['password']) //сравниваем хеш пароля из БД с хешеи из введенного пароля  
            if($password==$truePassword)
            { 
                //пишутся логин и хэшированный пароль в cookie, также создаётся переменная сессии
                setcookie ("login", $login, time() + 60000);                         
                setcookie ("password", md5($login.md5(md5($password).$row['salt'])), time() + 60000);                    
                $_SESSION['id'] = $row['id'];   //записываем в сессию id пользователя               

                $id = $_SESSION['id'];                             
                return true;          
            }           
            else //если пароль не верный           
            {               
                $error = "Неверный пароль";                                       
                return false;          
            }       
        }       
        else //если пользователя нет в БД        
        {           
            $error = "Такого пользователя нет в системе";           
            return false;      
        }   
    }   
    else //если поля не заполнены
    {       
        $error = "Поля не должны быть пустыми!";              
        return false;  
    } 

}

echo login();