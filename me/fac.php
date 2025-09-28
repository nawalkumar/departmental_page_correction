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
                        "name": "Dr. Jai Gopal Gupta",
                        "designation": "Assistant Professor, Head of Department",
                        "email": "jaig@nitsikkim.ac.in",
                        "phone": "+91 9414931979",
                        "research_interest": "Performance, Emission, Combustion in Internal Combustion Engines, Alternative Fuels and Renewable Energy Resources",
                        "image": "./img/jaig@nitsikkim.ac.in.jpg",
                        "profile_link": "https://me.nitsikkim.ac.in/profile.php?sn=836"
                    },
                    {
                        "name": "Dr. Anil Lal S",
                        "designation": "Associate Professor",
                        "email": "anillals@nitsikkim.ac.in",
                        "phone": "+91 9447007935",
                        "research_interest": "Computational Methods in Fluid Mechanics & Heat transfer, Mathematical Methods for Engineering, Machine Learning Techniques, Research Methodology, Optimization Techniques, Economics.",
                        "image": "./img/anillals@nitsikkim.ac.in.jpg",
                        "profile_link": "https://me.nitsikkim.ac.in/profile.php?sn=831"
                    },
                    {
                        "name": "Dr. Ranjan Basak",
                        "designation": "Associate Professor",
                        "email": "basakranjan@nitsikkim.ac.in",
                        "phone": "+91 9434189483",
                        "research_interest": "Fluid Mechanics, Machine Design",
                        "image": "./img/basakranjan@nitsikkim.ac.in.jpg",
                        "profile_link": "https://me.nitsikkim.ac.in/profile.php?sn=74"
                    },
                    {
                        "name": "Dr. Shambhunath Barman",
                        "designation": "Associate Professor",
                        "email": "shambhunath.barman@nitsikkim.ac.in",
                        "phone": "+91 9432891531",
                        "research_interest": "Study of Transport Phenomena in Material, Processing: Experimental & Numerical Heat , Transfer and Computational Fluid Dynamics.",
                        "image": "./img/shambhunath.barman@nitsikkim.ac.in.jpg",
                        "profile_link": "https://me.nitsikkim.ac.in/profile.php?sn=46"
                    },
                    {
                        "name": "Dr. Debajit Saha",
                        "designation": "Assistant Professor",
                        "email": "debajit.saha1986@nitsikkim.ac.in",
                        "phone": "+91 7479013191, +91 9748552504", 
                        "research_interest": "Fluid Mechanics and Machines, Turbulence, Computational Fluid Dynamics, Thermal Engineering",
                        "image": "./img/debajit.saha1986@nitsikkim.ac.in.jpg",
                        "profile_link": "https://me.nitsikkim.ac.in/profile.php?sn=31"
                    },
                    {
                        "name": "Dr. Biswajit Roy",
                        "designation": "Assistant Professor",
                        "email": "biswajitroy@nitsikkim.ac.in",
                        "phone": "+91 7002265854",
                        "research_interest": "Tribology of Bearing, Uncertainty Quantification, Machine learning, Solar Energy.",
                        "image": "./img/biswajitroy@nitsikkim.ac.in.jpg",
                        "profile_link": "https://me.nitsikkim.ac.in/profile.php?sn=846"
                    },
                    {
                        "name": "Dr. Kirti Tewari",
                        "designation": "Temporary Faculty",
                        "email": "kirti@nitsikkim.ac.in",
                        "phone": "+91 7478141128, +91 6392601826",
                        "research_interest": "Renewable Energy, Thermal-fluid",
                        "image": "./img/kirti@nitsikkim.ac.in.jpg",
                        "profile_link": "https://me.nitsikkim.ac.in/profile.php?sn=774"
                    },
                    {
                        "name": "Dr. Bibhuti Bhusan Nayak",
                        "designation": "Temporary Faculty",
                        "email": "bibhuti@nitsikkim.ac.in",
                        "phone": "+91 9938589530",
                        "research_interest": "Modeling of fluid flow and heat transfer in single and micro scale two phase flow, Computational Fluid Dynamics, Renewable Energy Sources, Electrical Vehicles, Waste to Energy conversion.",
                        "image": "./img/bibhuti@nitsikkim.ac.in.jpg",
                        "profile_link": "https://me.nitsikkim.ac.in/profile.php?sn=775"
                    },
                    {
                        "name": "Dr. Dipayan Das",
                        "designation": "Temporary Faculty",
                        "email": "dipayan.mech@nitsikkim.ac.in",
                        "phone": "+91 9610535845",
                        "research_interest": "Work System Design, Ergonomics and Occupational Safety, Human Factors Engineering.",
                        "image": "./img/dipayan.mech@nitsikkim.ac.in.jpg",
                        "profile_link": "https://me.nitsikkim.ac.in/profile.php?sn=797"
                    }
                ],
                "staff": [
                    {
                        "name": "Mr. Suneel Kumar Kushawaha",
                        "designation": "Technical Assistant",
                        "email": "suneel@nitsikkim.ac.in",
                        "phone": "+91 8127856096",
                        "image": "./img/suneel@nitsikkim.ac.in.jpg",
                    },
                    {
                        "name": "Mr. Amit Maity",
                        "designation": "Senior Technician",
                        "email": "aamit@nitsikkim.ac.in",
                        "phone": "+91 9851566030",
                        "image": "./img/aamit@nitsikkim.ac.in.jpg",
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