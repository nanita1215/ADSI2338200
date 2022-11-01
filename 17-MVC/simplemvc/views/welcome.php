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

            <h1>List All Users </h1>
        </header>
       

        <section>
            <a href="" class="mt-10 p-2 flex justify-center items-center w-2/12 gap-2 bg-green-600/50 rounded hover:scale-105 transition hover:bg-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>            
            </a>

            <table class="mt-6 mx-auto w-10/12 border-collapse  ">
                <thead >
                    <tr class="bg-black/40 text-white/60 border-b-2 border-white/40 text-left">
                        <th class="rounded-tl-md p-4">ID</th>
                        <th>Full Name </th>
                        <th>Photo</th>
                        <th class="rounded-tr-md">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row= mysqli_fetch_array($data)): ?>
                    <tr class="bg-white/20 odd:bg.white/10">
                        <td class="p-3"><?php echo $row['id'] ?></td>
                        <td><?php echo $row['fullname'] ?></td>
                        <td>
                            
                            <img src="../public/images/FD4iiRcWUAUHijw.jpg" class="w-10 rounded-full">
                        </td>
                        <td class="flex justify-center gap-2">
                            <a href="?method=show&id=<?php echo $row['id'] ?>" class="rounded-full w-7 bg-black/50 flex p-1  text-white/50 hover:scale-105 transition mt-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </a>
                        <a href="?method=edit&id=<?php echo $row['id'] ?>" class="rounded-full w-7 bg-black/50 flex p-1 text-white/50 hover:scale-105 transition mt-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        </a>
                            <a href="javascript:;" data-id="<?php echo $row['id'] ?>" class="rounded-full w-7 bg-red-600/60 flex p-1 text.white/50 hover:scale-105 transition mt-2 btn-delete"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>

                            </a>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </section>
    </main>           
    </body>  
</html>