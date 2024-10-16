<?php require VIEWS . "partials/header.view.php" ?>

<main>
    <div class="w-70ch h-96 margin-auto bg-rebeccapurple p-6 my-12 mx-auto rounded-xl text-white flex gap-8">
        <div class="max-w-40 h-fit flex flex-col">
            <img class="rounded-full" src="https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg" alt="">
            <a class="no-underline hover:underline font-bold m-auto" href="#">Change</a>
        </div>

        <div class="flex flex-col gap-4">
            <div>
                <div>
                    <p class="inline-block">First name:</p>
                    <span id="firstname">John</span>
                    <button class="bg-black hover:bg-white hover:text-black px-2 rounded" href="#">Edit</button>
                </div>
                <div class="mt-2">
                    <p class="inline-block">Last name:</p>
                    <span id="firstname">Doe</span>
                    <button class="bg-black hover:bg-white hover:text-black px-2 rounded" href="#">Edit</button>
                </div>
            </div>
            <hr>

            <div>
                <p class="inline-block">Username:</p>
                <span id="username">jd</span>
                <button class="bg-black hover:bg-white hover:text-black px-2 rounded" href="#">Edit</button>
            </div>

            <div>
                <p class="inline-block">Address:</p>
                <span id="address">Mi casa, Mi pueblo, 00000</span>
                <button class="bg-black hover:bg-white hover:text-black px-2 rounded" href="#">Edit</button>
            </div>
            <hr>

            <div>
                <p class="inline-block">Password:</p>
                <span id="Password">************</span>
                <button class="bg-black hover:bg-white hover:text-black px-2 rounded" href="#">Edit</button>
            </div>
        </div>
    </div>
</main>

<?php require VIEWS . "partials/footer.view.php" ?>
