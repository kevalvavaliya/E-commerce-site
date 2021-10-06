<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    .x {
        display: flex;
    }

    .con {
        background-color: #f3f3f3;
        margin: 40px;
        width: 29%;
        height: 80vh;
        /* border: 1px solid; */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        border-radius: 12px;
    }

    input[type="text"],
    input[type="password"] {
        padding: 5px;
        background: none;
        border: none;
        border-bottom: 2px solid;
        outline: none;
    }

    .title {
        /* margin: 20px; */
        text-align: center;
        border-radius: 12px 12px 0 0;
        color: white;
        background-color: #07c;
        z-index: -1;
        padding: 20px;
    }

    table {
        width: 100%;
        height: 80%;
        margin: 0px 40px;
    }

    .mark {
        margin: 0px 0px 0 0;
        width: 30px;
    }

    .b {
        text-align: center;
    }

    .btn {
        /* font-size: large; */
        font-weight: bold;
        margin: 20px 0;
        border-radius: 7px;
        text-transform: uppercase;
        outline: none;
        cursor: pointer;
        color: white;
        background-color: #0070c9;
        background: linear-gradient(#42a1ec, #025faa);
        border-color: #07c;
        /* border: 2px solid black; */
        padding: 07px 15px;
        /* text-align: left; */
    }

    .data {
        margin: 40px 5px;
    }

    input::placeholder {
        color: rgb(97, 97, 97);
    }
    </style>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="x">

            <div class="con">
                <div class="title">
                    <h2>Registration</h2>
                </div>
                <table>
                    <tr>
                        <td>
                            <input type="text" name="uid" id="" placeholder="User id" />
                        </td>
                        <td>
                            <input type="password" name="pass" id="" placeholder="password" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="snum" id="" placeholder="seat no." />
                        </td>
                        <td>
                            <input type="text" name="name" id="" placeholder="Name" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="mname" id="" placeholder="mother name" />
                        </td>
                        <td>
                            <input type="text" name="fname" id="" placeholder="Father name" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="pin" placeholder="pincode" id="" />
                        </td>
                        <td>
                            <input type="text" name="add" id="" placeholder="address" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Birthdate : </label> <br />
                            <br />
                            <input type="date" name="bday" id="" />
                        </td>
                        <td>
                            <label for="">Gender : </label> <br />
                            <br />
                            <input type="radio" name="gender" id="" value="male" />Male <br />
                            <input type="radio" name="gender" id="" value="female" />FeMale <br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Branch</label><br />
                            <br />
                            <select name="se" id="">
                                <option value="cse">IT</option>
                                <option value="cse">CSE</option>
                                <option value="ce">CE</option>
                            </select>
                        </td>
                        <td>
                            <label for="">grades : </label> <br />
                            <br />
                            <span class="mark"> English : </span>
                            <input class="mark" type="text" name="eng" id="" /> <br />
                            <span class="mark"> Maths : </span>
                            <input type="text" class="mark" name="math" id="" /> <br />
                            <span class="mark"> Science : </span>
                            <input type="text" class="mark" name="st" id="" /> <br />
                        </td>
                    </tr>
                </table>
                <div class="b">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </div>
            <div class="data">
                <?php

                echo "<li>id = ", $_POST['uid'], '</li>';
                echo "<li>Pass = ", $_POST['pass'], '</li>';
                echo "<li>Seat no = ", $_POST['snum'], '</li>';
                echo "<li>Name  = ", $_POST['name'], '</li>';
                echo "<li>Mother Name  = ", $_POST['mname'], '</li>';
                echo "<li>father Name  = ", $_POST['fname'], '</li>';
                echo "<li>Pincode  = ", $_POST['pin'], '</li>';
                echo "<li>Address  = ", $_POST['add'], '</li>';
                echo "<li>Birthday  = ", $_POST['bday'], '</li>';
                // foreach ($_POST['gender'] as $i) {
                echo "<li>Gender  = ", $_POST['gender'], '</li>';
                // };
                foreach ($_POST['Branch'] as $i) {
                    echo $i, '</li>';
                };
                echo '<li>marks of english = ', $_POST['eng'] . '</li>';
                echo '<li>marks of Maths = ', $_POST['math'] . '</li>';
                echo '<li>marks of Science = ', $_POST['st'] . '</li>';
                ?>
            </div>
        </div>
    </form>

</body>

</html>
