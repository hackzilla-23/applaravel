@extends('index')
@section('edit')
    <form class="flex justify-center h-lvh items-center" action="../editProduct" method="POST">
        <input type="hidden" name="productId" value = "<?= $product['Id'] ?>">

        <div class="w-[400px] px-10 container rounded-md mx-auto">
            <div class="text-white">
                <ul class="flex justify-between items-center py-7">
                    <li class="text-2xl font-bold">MarketX</li>
                    <li><a href="../dashboard.php"><i class="text-2xl fa-solid fa-home"></i></a></li>
                </ul>
            </div>

            <p class="text-center text-white font-medium text-xl pb-8">EDIT PRODUCT</p>

            <div style="gap : 80px" class="pb-14 flex flex-col gap-20 mx-auto">
                <div class="inputBox relative">
                    <input value="<?= $product['Nom_Produit'] ?>" type="text" name="Nom_Produit"
                        class="rounded-full py-2.5 pl-5 outline-none absolute w-[315px]">
                    <span class="z-1 absolute left-7 top-3.5 text-[15px]">Product Name</span>
                    <p style="color:red; position:absolute; top:50px;"><?= $SetEdit->nom_produit ?></p>
                </div>
                <div style="margin-top:15px" class="inputBox relative">
                    <input value="<?= $product['Prix'] ?>" type="number" name="Prix"
                        class="rounded-full py-2.5 pl-5 outline-none absolute w-[315px]">
                    <span class="z-1 absolute left-7 top-3.5 text-[15px]">Price</span>
                    <p style="color:red; position:absolute; top:50px;"><?= $SetEdit->prix ?></p>
                </div>
                <div style="margin-top:15px" class="inputBox relative">
                    <input value="<?= $product['QTE'] ?>" type="number" name="QTE"
                        class="rounded-full py-2.5 pl-5 outline-none absolute w-[315px]">
                    <span class="z-1 absolute left-7 top-3.5 text-[15px]">Quantity</span>
                    <p style="color:red; position:absolute; top:50px;"><?= $SetEdit->quantite ?></p>
                </div>
                <div style="margin-top:15px" class="inputBox relative">
                    <textarea type="text" rows="4" name="Description"
                        class="rounded-lg py-2.5 pl-5 outline-none absolute w-[315px]"><?= $product['Description'] ?></textarea>
                    <span class="z-1 absolute left-7 top-3.5 text-[15px]">Description</span>
                    <p style="color:red; position:absolute; top:50px;"><?= $SetEdit->description ?></p>
                </div>
            </div>

            <input style="margin-top:110px" name="modifier"
                class="mb-8 mt-24 py-2.5 w-[310px] rounded-full text-white font-bold" type="submit" value="Save">
        </div>
    </form>
@endsection
