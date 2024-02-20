<?php $__env->startSection('body'); ?>
    <div class="h-screen">

        <div>
            <img class="h-screen absolute object-cover" src="images\DepED-MalaybalayCITY.jpg" alt="">
        </div>
        <div class="relative  top-0 h-[4rem] bg-navyblue/50 w-full overflow-hidden ">

            <nav class="flex justify-between mx-[3%] ">
                
                <div class="flex gap-2 ">
                    <div>
                        <a href="/">
                            <img class="w-[6rem]" src="images\Deped-Logo.png" alt="DepED_logo">
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

        

        <div class="mx-auto  text-center   border mt-[5rem] bg-white opacity-90 rounded-xl p-3 shadow-lg w-fit max-w-7xl ">

            <div class="grid">

                <table>

                    
                    <thead class=" bg-navyblue text-white text-lg">
                        <tr>
                            <th class="border border-white p-3">Position</th>
                            <th class="border border-white p-3">Education</th>
                            <th class="border border-white p-3">Experience</th>
                            <th class="border border-white p-3">Training</th>
                            <th class="border border-white p-3">Eligibility</th>
                            <th class="border border-white p-3">Salary Grade</th>
                            <th class="border border-white p-3">Posting Date</th>
                            <th class="border border-white p-3">Closing Date</th>
                            <th class="border border-white p-3">Action</th>
                        </tr>

                    </thead>

                    

                    <tbody class="border-b text-center text-lg">

                        <tr>
                            
                            <td class="p-1 border-r">Department Of Education</td>

                            
                            <td class="p-1 border-r">Teaher I</td>
                            
                            <td class="p-1 border-r">Teacher II</td>
                            
                            <td class="p-1 border-r">4 Years css</td>
                            
                            <td class="p-1 border-r">Yes</td>
                            
                            <td class="p-1 border-r">90000</td>
                            
                            <td class="p-1 border-r">08 Jan 2024</td>
                            
                            <td class="p-1 border-r">18 Jan 2024</td>
                            
                            <td class="p-1 ">
                                <button class="border rounded-lg p-1 bg-navyblue text-white">Apply</button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
        
        <div id="myModal" class="hidden z-0 top-0 right-0 left-0 bottom-0 bg-black fixed ">

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

<?php echo $__env->make('applicant.html.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\acer\Dropbox\PC\Desktop\deped-main\deped-main\resources\views/applicant/mainPage.blade.php ENDPATH**/ ?>