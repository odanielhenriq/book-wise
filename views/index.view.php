 <form class="flex space-x-2 mt-6">
     <input type="text"
         class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
         name="pesquisar" id="" placeholder="pesquisar...">
     <button type="submit">🔎</button>
 </form>

 <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4  ">


     <?php foreach ($livros as $livro): ?>
         <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
             <div class="flex">
                 <div class="w-1/3">imagem</div>
                 <div class="space-y-1">
                     <a href="/livro?id=<?php echo $livro['id']?>" class="font-semibold hover:underline"><?php echo $livro['titulo']?></a>
                     <div class="text-xs italic"><?php echo $livro['autor']?></div>
                     <div class="text-xs italic">⭐⭐⭐(3 Avaliações)</div>
                 </div>
             </div>
             <div class="text-sm mt-5">
                 <?php echo $livro['descricao']?>
             </div>
         </div>
     <?php endforeach; ?>

 </section>