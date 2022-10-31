<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private</title>
    <script src="/public/js/tailwind.3.2.1.js"></script>
</head>
<body class="bg-gradient-to-t
             from-blue-900
             to-green-100
             min-h-screen">
    <main class="m-10 
                 mx-auto
                 max-w-lg
                 p-5 
                 border-2
               border-blue-900
               bg-white/5
                 rounded ">
        <h1 class="m-5 
                   text-center 
                   text-4xl 
                   text-black 
                   text-opacity-50 
                   font-medium">
            <a href="index.php" class="float-left
                                       transition
                                       hover:text-white
                                       hover:-translate-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            Private(Attributes/Methods)
        </h1>
        <section class="bg-black
                         text-white
                         text-opacity-75
                         p-5   
                         min-h-[400px]
                         rounded">
            <form action="" method="post" class="m-4 
                                                 flex 
                                                 flex-col 
                                                 justify-center 
                                                 items-start
                                                 ring-1 
                                                 ring-indigo-200 
                                                 p-5
                                                 gap-4">
                <h3 class="text-2xl 
                           font-bold 
                           mx-auto 
                           my-2">
                        Table Maker
                    </h3>
                <label for="num_rows" class="flex justify-between w-[220px]">
                    <strong>Number of Rows</strong>
                    <input name="num_rows" class="p-1 rounded w-16 text-black/80" type="number" >
                </label>
                <label for="num_cols" class="flex justify-between w-[220px]">
                    <strong>Number of Cols</strong>
                    <input name="num_cols" class="p-1 rounded w-16 text-black/80" type="number">
                </label>
                <button class="bg-black/60 py-2 px-4 text-white/80"> Render Table</button>
            </form>
            <?php
                class RenderTable {
                    private $nr;
                    private $nc;

                     // metodos publicos 
                    
                    public function __construct($nr, $nc) {
                        $this->nr = $nr;
                        $this->nc = $nc;

                        $this->renderTableHeader();
                        $this->renderTableBody();
                        $this->renderTableFooter();
                    }                   

                    // metodos privados 

                    private function renderTableHeader() {
                        echo '<table class="border-collapse my-4 mx-auto">';

                    }

                    private function renderTableBody() {
                        for ($i = 1; $i <= $this->nr ; $i++) { 
                            echo '<tr>';

                        for ($j = 1; $j <= $this->nc; $j++) { 

                                echo '<td class= "p-1 ring-1 ring-white/20">R' . $i . ' C ' . $j . '</td>';
                            }

                            echo '</tr>';
                        }

                    }

                    private function renderTableFooter() {
                        echo '</table>';

                    }
                        
                }
                

            if ($_POST) {
                $nr = $_POST['num_rows'];
                $nc = $_POST['num_cols'];

                $rt = new RenderTable($nr, $nc);

            }
            
            

            ?>
        </section>
    </main>
    
</body>

</html>