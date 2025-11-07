
<?php
$a = $_GET['a'];

switch($a) {
    case 1:
        $k = "hey";
        break;
    case 10:
        $k = "hello";
        break;
}
?>

<div class="relative bg-zinc-300">
    {{ use_nav }}
    <div class="fixed bg-zinc-100 w-full">
        <div class="container mx-auto grid lg:grid-cols-7 max-h-[90vh] ">
            <main id="blog-wrapper" class="col-span-5 px-4 min-h-[90vh]">
                <!-- <div class="p-4">
                    <div class="w-full h-full min-h-[200px] bg-white p-4 rounded shdaow hover:shadow-lg">
                    {{ _k }}
                    </div>
                </div> -->
                {{ use_card }}
            </main>
            <aside class="relative lg:min-w-[300px] col-span-2 bg-zinc-400/50">
                <div class="fixed top-20">
                    <h2>Others</h2>
                </div>
            </aside>
        </div>
    </div>
    
    <footer></footer>
</div>