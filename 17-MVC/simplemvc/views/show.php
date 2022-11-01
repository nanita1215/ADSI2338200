<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MVC - OOP</title>
<link rel="stylesheet" href="../public/css/custom.css">
<script src="public/js/tailwind.3.2.1.js"></script>
<head>
    <body>

    <main class="my-10 mx-auto w-8/12 bg-black/40 rounded">
        <header class = "text-white/50 flex gap-4 justify-center items-center  ">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>

            <h1>Show User </h1>
        </header>
        
        <section>
        <table class="mt-10 text-white/50 w-6/12 mx-auto">
            <?php while($row = mysqli_fetch_array( $data)):?>
            <tr>
                <td colspan="2" class="text-center">
                <img src="<?php echo $row['photo'] ?> " class="m-2 mx-auto" width="220px">
                </td>
            </tr>

            <tr>
                <th class="py-2 px-4 text-left">Full Name: </th>
                <td><?php echo $row['fullname']?></td>
            </tr>

            <tr>
                <th>E-mail: </th>
                <td><?php echo $row['email']?></td>
            </tr>

            <tr>
                <th>Role: </th>
                <td><?php echo $row['role']?></td>
            </tr>
            <?php endwhile ?>
        </table>
    </section>
        
    </main>
    <script src="/simplemvc/public/js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn-delete').click(function(event) { 
                $id = $(this).attr('data-id')
                if(confirm("Are you sure?")) {window.location.replace('method=delete&id='+$id)}
              });
        });
    </script>

    </body>
</head>






