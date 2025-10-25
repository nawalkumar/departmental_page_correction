<?php include "../header.php" ?>
<!-- <div class="px-12">
    <div class="white px-10">
        <div class="p-1">
            <div id="header" class="flex items-center mb-8"></div>
            <div class="flex items-center">
                <span class="material-symbols-outlined text-gray-400">people</span>
                <div id="breadcrumb" class="text-red-900 text-sm font-medium ml-2"></div>
            </div>
            <hr class="border-t-4 border-yellow-600 w-full mb-16">
        </div>
    </div>
</div> -->

<div class="bg-white">
    <div class="px-12">
        <div class="relative top-1 white mx-10 px-10">
            <div class="p-0">
                <div id="header" class="flex items-center"></div>
                <div class="flex items-center">
                    <i class=" fa fa-user text-gray-400"></i>
                    <div id="breadcrumb" class="text-red-900 text-sm font-medium ml-2">People</div>
                </div>
                <hr class="border-t-4 border-yellow-600 w-full mb-1">
            </div>
        </div>
        <div class="bg-white rounded-lg p-4 gap-3 flex flex-col max-w-7xl mx-auto">
            <div class="projects flex flex-col items-center w-full gap-5">
                <div class="rounded-xl w-full border-2 border-gray-200 shadow-md">
                    <div class="flex flex-col items-center min-h-screen p-6">
                        <div class="flex justify-center items-center p-4">
                            <div
                                class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                                Faculty </div>
                        </div>
                        <div id="cardContainer"
                            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                        </div>
                        <div class="flex justify-center items-center p-4">
                            <div
                                class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                                Staff </div>
                        </div>
                        <div id="staffContainer"
                            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const professorData = {
                "professors": [
                    {
                        "name": "Dr. Sumit Saha",
                        "designation": "Associate Professor , Head of Department",
                        "email": "email2me.sumit@gmail.com",
                        "phone": "+91 8697359987",
                        "research_interest": " SYNTHETIC ORGANIC CHEMISTRY , • Total synthesis of natural products , • Development of new synthetic methodology, • Isolation of natural products from medicinal plants available in Sikkim",
                        "image": "./img/email2me.sumit@gmail.com.jpg",
                        "profile_link": "https://chemistry.nitsikkim.ac.in/profile.php?sn=44"
                    },
                      {
                        "name": "Dr. Achintesh Narayan Biswas",
                        "designation": "Associate Professor",
                        "email": "achintesh@nitsikkim.ac.in",
                        "phone": "+91-9434377238",
                        "research_interest": "Bio-inorganic Chemistry",
                        "image": "./img/achintesh@nitsikkim.ac.in.jpg",
                        "profile_link": "https://chemistry.nitsikkim.ac.in/profile.php?sn=72"
                    },
                      {
                        "name": "Dr. Taraknath Kundu",
                        "designation": "Associate Professor",
                        "email": "taraknath.kundu@nitsikkim.ac.in",
                        "phone": "7479013269",
                        "research_interest": "Synthetic Organic Chemistry of Heterocycles,, Carbohydrates, , Asymmetric synthesis,, Medicinal Chemistry, , Isolation and Total synthesis of Natural Products",
                        "image": "./img/taraknath.kundu@nitsikkim.ac.in.jpg",
                        "profile_link": "https://chemistry.nitsikkim.ac.in/profile.php?sn=17"
                    },
                      {
                        "name": "Dr. Sumantra Bhattacharya",
                        "designation": "Temporary Faculty",
                        "email": "sumantra@nitsikkim.ac.in",
                        "phone": "+91-9831399066",
                        "research_interest": "Theoretical Chemistry, Excited State structure of properties of molecules, Homogeneous and heterogeneous catalysis ",
                        "image": "./img/sumantra@nitsikkim.ac.in.jpg",
                        "profile_link": "https://chemistry.nitsikkim.ac.in/profile.php?sn=105"
                    },
                      {
                        "name": "Dr. Dipmalya Basak",
                        "designation": "Temporary Faculty",
                        "email": "dipmalya@nitsikkim.ac.in",
                        "phone": "+91-9007628416",
                        "research_interest": " Coordination Chemistry, Coordination Clusters, Synthetic Inorganic Chemistry. My research interest encompasses the design and synthesis of polynuclear coordination clusters including homometallic 3d or 4f and heterometallic 3d-4f complexes with aesthetically pleasing topologies. The aggregation pathways of these polynuclear cluster molecules in solution is not well established and constitutes an important area of my research. I am also interested in investigating the magnetic properties (SMM, SCM, Magnetocaloric effect, etc.) of such complexes along with other properties like Photoluminescence, various catalytic properties, etc. Lower nuclearity and mononuclear complexes with interesting magnetic and catalytic properties also draws my interes",
                        "image": "./img/dipmalya@nitsikkim.ac.in.jpg",
                        "profile_link": "https://chemistry.nitsikkim.ac.in/profile.php?sn=816"
                    },
                      {
                        "name": "Dr. Subhash Ch. Makkhal",
                        "designation": "Temporary Faculty",
                        "email": "subhash@nitsikkim.ac.in",
                        "phone": "+91 7003499741 / +91 8017657340",
                        "research_interest": "Synthesis of novel organic molecules for biological applications.Designing and setting up jet cooled setup in combination different types of laser instruments for measuring photo physical properties of molecules in gas phase.Photophysical study of different types of fluorophore molecules in different biologically relevant environments.Theoretical investigation of excited state phenomenon that is observed in the experimental studies.",
                        "image": "./img/subhash@nitsikkim.ac.in.jpg",
                        "profile_link": "https://chemistry.nitsikkim.ac.in/profile.php?sn=853"
                    }
                ],
                "staff": [
                    {
                        "name": "Mr. Suman Pathak",
                        "designation": "Senior Technician",
                        "email": "suman@nitsikkim.ac.in",
                        "phone": "+91 7407654688",
                        "image": "./img/suman@nitsikkim.ac.in.jpg",
                    },
                    {
                        "name": "Chandrama Majumdar Saha",
                        "designation": "Senior Technician",
                        "email": "chandrama@nitsikkim.ac.in",
                        "phone": "+91 8420352462",
                        "image": "./img/chandrama@nitsikkim.ac.in.jpg",
                    }
                ]
            };

            function generateProfessorCard(professor) {
                const imageContent = professor.image
                    ? `<div class="flex justify-center"><img src="${professor.image}" alt="${professor.name}" class="professor-image"></div>`
                    : `<div class="flex justify-center"><div class="empty-image"><span class="text-gray-500">No Image</span></div></div>`;

                return `
                <div class="border-2 border-red-700 rounded-lg p-6 shadow-md bg-white professor-card">
                    ${imageContent}
                    <h2 class="text-lg font-bold text-center">${professor.name}</h2>
                    <p class="text-sm text-gray-600 text-center">${professor.designation}</p>
                    <div class="text-center">
                        <p class="text-sm text-gray-500">${professor.email}</p>
                        <p class="text-sm text-gray-500">${professor.phone}</p>
                        <p class="text-xs text-gray-400 mt-2">Research Interest: ${professor.research_interest}</p>
                    </div>
                    <a href="${professor.profile_link}" class="mt-4 bg-red-700 text-white px-4 py-2 rounded mx-auto block text-center hover:bg-red-800 transition">View More</a>
                </div>
            `;
            }

            function generateStaffCard(staff) {
                const imageContent = staff.image
                    ? `<div class="flex justify-center"><img src="${staff.image}" alt="${staff.name}" class="professor-image"></div>`
                    : `<div class="flex justify-center"><div class="empty-image"><span class="text-gray-500">No Image</span></div></div>`;

                return `
                <div class="border-2 border-red-700 rounded-lg p-6 shadow-md bg-white professor-card">
                    ${imageContent}
                    <h2 class="text-lg font-bold text-center">${staff.name}</h2>
                    <p class="text-sm text-gray-600 text-center">${staff.designation}</p>
                    <div class="text-center">
                        <p class="text-sm text-gray-500">${staff.email}</p>
                        <p class="text-sm text-gray-500">${staff.phone}</p>
                    </div>
                </div>
            `;
            }

            function loadProfessorCards(containerId, professors) {
                const container = document.getElementById(containerId);
                container.innerHTML = professors.map(generateProfessorCard).join('');
            }

            function loadStaffCards(containerId, staff) {
                const container = document.getElementById(containerId);
                container.innerHTML = staff.map(generateStaffCard).join('');
            }

            loadProfessorCards("cardContainer", professorData.professors);
            loadStaffCards("staffContainer", professorData.staff);
        </script>
    </div>

    <?php include "../footer.php" ?>