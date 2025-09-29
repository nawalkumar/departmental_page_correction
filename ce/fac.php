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
                        "name": "Dr. Ankit Bhardwaj",
                        "designation": "Assistant Professor,Head of Department",
                        "email": "bhardwaj@nitsikkim.ac.in",
                        "phone": "+91 9716132601",
                        "research_interest": "Long-term behaviour of concrete under tension for flexural members,Adhesive bonded steel-concrete composite flexural members,Time dependent (creep and shrinkage) analysis,Stability of cold form steel structures,Finite element modelling using commercial software,Analytical solutions,Development of design practice",
                        "image": "./img/bhardwaj@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ce.nitsikkim.ac.in/profile.php?sn=852"
                    },
                    {
                        "name": "Dr. Anirban Banik",
                        "designation": "Assistant Professor",
                        "email": "anirbanbanik@nitsikkim.ac.in",
                        "phone": "+91-6009492587",
                        "research_interest": " Hydro-Informatics, Open Channel Hydrodynamics",
                        "image": "./img/anirbanbanik@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ce.nitsikkim.ac.in/profile.php?sn=819"
                    },
                    {
                        "name": "Dr. Joy Pal",
                        "designation": "Assistant Professor",
                        "email": "joypal@nitsikkim.ac.in",
                        "phone": "+91 9773886092",
                        "research_interest": " Structural Engineering",
                        "image": "./img/joypal@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ce.nitsikkim.ac.in/profile.php?sn=830"
                    },
                    {
                        "name": "Dr. Krishna Kumar Maurya",
                        "designation": "Assistant Professor",
                        "email": "kkmaurya@nitsikkim.ac.in",
                        "phone": "+91-9956328499",
                        "research_interest": "Structural Engineering, Structural Health Monitoring, Sensor System, NDE Techniques, Advanced Concrete Technology, Bacterial Concrete",
                        "image": "./img/kkmaurya@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ce.nitsikkim.ac.in/profile.php?sn=832"
                    },
                    {
                        "name": "Dr. Narayan",
                        "designation": "Temporary Faculty",
                        "email": "narayan@nitsikkim.ac.in",
                        "phone": "+91 7292828263 +91 8881112206",
                        "research_interest": "NL - inelastic analysis of braces and braced frames, NCBFs, BRBs, Upgrade of Truss Bridges, Steel-Timber Structure, Dynamic yield Strength of metals.",
                        "image": "./img/narayan@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ce.nitsikkim.ac.in/profile.php?sn=851"
                    },
                    {
                        "name": "Dr. Neelanjan Dutta",
                        "designation": "Temporary Faculty",
                        "email": "neel@nitsikkim.ac.in",
                        "phone": "+91 9475986145",
                        "research_interest": " Ground Water and wastewater treatment, Solid Waste Management",
                        "image": "./img/neel@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ce.nitsikkim.ac.in/profile.php?sn=81"
                    },
                    {
                        "name": "Dr. Ankush Kumar",
                        "designation": "Temporary Faculty",
                        "email": "ankush@nitsikkim.ac.in",
                        "phone": "+91-6000875244",
                        "research_interest": "Pavement Materials Characterization; Asphalt Binder Rheology and Chemistry; Bio-Asphalt; Recycled Asphalt Pavement; Alternative Pavement Materials; Sustainable Pavement Design; Warm Mix Asphalt; Asphalt Rejuvenation.",
                        "image": "./img/ankush@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ce.nitsikkim.ac.in/profile.php?sn=857"
                    },
                ],
                "staff": [
                    {
                        "name": "Ms. Chanda Moktan",
                        "designation": "Senior Technician",
                        "email": "chandamoktan@nitsikkim.ac.in",
                        "phone": "+91 7479013247",
                        "image": "./img/chandamoktan@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ce.nitsikkim.ac.in/staffprofile.php?sn=12"
                    },
                    {
                        "name": "Sumit Kumar",
                        "designation": "Technical Assistant",
                        "email": "sumit@nitsikkim.ac.in",
                        "phone": "+91-9046157771",
                        "image": "./img/sumit@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ce.nitsikkim.ac.in/staffprofile.php?sn=18"
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