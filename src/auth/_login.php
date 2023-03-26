<div class="bg-white">
    <div class="grid lg:grid-cols-2 md:grid-cols-1 gap-2">
        <div id="animation1" class="hidden lg:flex md:hidden ">
            <img  class="transition ease-in  hover:shadow-xl hover:-translate-y-5 hover:scale-5 duration-500 rounded-full h-full" src="https://www.posindonesia.co.id/en/artikel/image/Umrq07UinRfsf5i5.jpg" alt="">
        </div>
        <div id="animation2" class="transition ease-in  hover:shadow-xl hover:-translate-y-5 hover:scale-5 duration-500">
            <div class="p-3 border rounded-xl shadow-xl bg-orange-500">
                <form action="src/function/proses_login.php?" method="post">
                    <div class=" mb-3">
                        <img class="bg-white shadow-xl p-3 rounded-lg" src="src/assets/img/logo.png" alt="logo">
                    </div>
                    <div class=" mb-3">
                        <label for="email" class="form-label  text-white font-bold">Email</label>
                        <input id="email" name="email" class="form-control w-96 md:w-full" type="text" placeholder="Enter Email" />
                    </div>
                    <div class=" mb-3">
                        <label for="password" class="form-label text-white font-bold">Password</label>
                        <input id="password" name="password" class="form-control w-96 md:w-full" type="password" placeholder="Enter Password" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-600" value="login" onclick="showLoading()"> Login </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>