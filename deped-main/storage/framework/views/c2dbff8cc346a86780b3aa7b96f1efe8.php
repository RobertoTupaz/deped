<?php $__env->startSection('body'); ?>
    <div class="h-screen">

        <div>
            <img class="h-screen absolute object-cover" src="\images\DepED-MalaybalayCITY.jpg" alt="Bg-Photo">
        </div>
        <div class="relative  top-0 h-[4rem] bg-navyblue/50 w-full overflow-hidden ">

            <nav class="flex justify-between mx-[3%] ">
                
                <div class="flex gap-2 ">
                    <div>
                        <a href="/">
                            <img class="w-[6rem]" src="\images\Deped-Logo.png" alt="DepED_logo">
                        </a>
                    </div>
                    <div class=" text-white mt-3 font-bold text-2xl">
                        <h1>Division of Malaybalay City</h1>
                    </div>
                </div>

                
                <button onclick="toggleModal()" class="bg-white cursor-pointer p-2 rounded-xl font-semibold mt-3">
                    Account
                </button>

            </nav>

        </div>

        

        <div
            class="mx-auto text-center mt-[9rem] bg-white opacity-90 rounded-3xl px-4 pt-5 shadow-lg justify-around w-2/12 ">
            <h1 class="font-bold text-xl mb-3">LOGIN</h1>
            <form class="grid text-lg">
                <label class="text-start font-semibold ">Email</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="email">
                <label class="text-start font-semibold">Password</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="password">
                <button type="submit"
                    class=" mt-3 bg-navyblue text-white rounded-lg p-1 font-semibold hover:shadow-md">Login</button>
                <div class="mt-3 cursor-pointer text-navyblue">
                    Forgot password?
                </div>
                <div class="my-3">
                    <hr>
                </div>
                <div class="grid">
                    Don't have an account? <a class="underline font-semibold cursor-pointer">Create Account</a>.
                </div>
            </form>
        </div>
        
        <div id="myModal" class="hidden z-0 top-0 right-0 left-0 bottom-0 bg-black/0 fixed ">

            <div class="modal fixed  rounded-xl  text-lg shadow-md mt-14 right-3 bg-white">
                <div class="my-3 cursor-pointer  hover:bg-gray-200 py-1 px-5">Account Settings</div>
                <div class="mx-3">
                    <hr>
                </div>
                <div class="my-3 cursor-pointer  hover:bg-gray-200 py-1 px-5">Log out</div>

            </div>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Function to toggle the modal display
            function toggleModal() {
                if (modal.style.display === "none" || modal.style.display === "") {
                    modal.style.display = "block";
                } else {
                    modal.style.display = "none";
                }
            }

            // Close the modal when clicking outside of it
            window.onclick = function(event) {
                if (event.target == modal) {
                    toggleModal();
                }
            }
        </script>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('applicant.html.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\acer\Dropbox\PC\Desktop\deped-main\deped-main\resources\views/applicant/auth/login.blade.php ENDPATH**/ ?>