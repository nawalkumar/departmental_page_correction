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
                        "name": "Dr. Nimai Charan Patel",
                        "designation": "Associate Professor, Head of Department",
                        "email": "ncpatel@nitsikkim.ac.in ",
                        "phone": " +91-9178684996",
                        "research_interest": "Electrical Machines, Power System Engineering, Computational Intelligence and Optimization Techniques.",
                        "image": "./img/ncpatel@nitsikkim.ac.in.jpg",
                        "profile_link": "https://eee.nitsikkim.ac.in/profile.php?sn=837"
                    },
                    {
                        "name": "Dr. Anjan Kumar Ray",
                        "designation": "Associate Professor, Dean Faculty Welfare",
                        "email": "akray.nits@nitsikkim.ac.in",
                        "phone": "+91-9432787969",
                        "research_interest": "Control Systems, Intelligent Systems, Robotics, Machine Learning & Artificial Intelligence, Electric Vehicles",
                        "image": "./img/akray.nits@nitsikkim.ac.in.jpg",
                        "profile_link": "https://eee.nitsikkim.ac.in/profile.php?sn=52"
                    },
                    {
                        "name": "Dr. Aurobinda Panda",
                        "designation": "Assistant Professor, Dean Academic",
                        "email": "aurobind.panda@nitsikkim.ac.in",
                        "phone": " +91-8001057780",
                        "research_interest": "Electric Vehicle, Distributed Generation System, Power Electronics and Drives, Power Quality",
                        "image": "./img/aurobind.panda@nitsikkim.ac.in.jpg",
                        "profile_link": "https://eee.nitsikkim.ac.in/profile.php?sn=70"
                    },
                    {
                        "name": "Dr. Sourav Mallick",
                        "designation": "Assistant Professor, Dean Planning & Development",
                        "email": "s.mallick@nitsikkim.ac.in",
                        "phone": "+91-8016930033",
                        "research_interest": " Power System Analysis, Operation and Control,Power System Stability,State Estimation in Power System,Cyber Security in Power Systems,Smart Grid and Renewable Energy, Application of Soft Computing Techniques in solving Power System Problems.",
                        "image": "./img/s.mallick@nitsikkim.ac.in.jpg",
                        "profile_link": "https://eee.nitsikkim.ac.in/profile.php?sn=68"
                    },
                    {
                        "name": "Dr. Molay Roy",
                        "designation": "Assistant Professor, Associate Dean Academic",
                        "email": "molay.roy@nitsikkim.ac.in",
                        "phone": "+91 9903881930",
                        "research_interest": " Power Electronics, , Converter and Controller,, Digital controller (FPGA, DSP, PIC Microcontroller), , Induction heating",
                        "image": "./img/molay.roy@nitsikkim.ac.in.jpg",
                        "profile_link": "https://eee.nitsikkim.ac.in/profile.php?sn=28"
                    },
                    {
                        "name": "Dr. Pradeep Kumar",
                        "designation": "Assistant Professor",
                        "email": "pradeep@nitsikkim.ac.in",
                        "phone": "+91-9905205302",
                        "research_interest": "Power Quality, Control System,Renewable Energy System,Power Electronics.",
                        "image": "./img/pradeep@nitsikkim.ac.in.jpg",
                        "profile_link": "https://eee.nitsikkim.ac.in/profile.php?sn=10"
                    },
                    {
                        "name": "Dr. Abhishek Rajan",
                        "designation": "Temporary Faculty, Associate Dean Academic",
                        "email": "rajan@nitsikkim.ac.in",
                        "phone": "+91 7576930181",
                        "research_interest": "Optimal power flow, Renewables intergration in power system, power system deregulation, Power system operation and control, soft computing techniques.",
                        "image": "./img/rajan@nitsikkim.ac.in.jpg",
                        "profile_link": "https://eee.nitsikkim.ac.in/profile.php?sn=113"
                    },
                    {
                        "name": "Dr. Vivek Kumar",
                        "designation": "Assistant Professor",
                        "email": "vivekkumar@nitsikkim.ac.in",
                        "phone": "+91 9650338088",
                        "research_interest": "Power system Stability and Control, advanced and Intelligent Control, Cyber Security in Power Systems, Smart Microgrid Grid, and Renewable Energy integration",
                        "image": "./img/vivekkumar@nitsikkim.ac.in.jpg",
                        "profile_link": "https://eee.nitsikkim.ac.in/profile.php?sn=839"
                    }
                ],
                "staff": [
                    {
                        "name": "Ms. Deepika Chettri",
                        "designation": "Senior Technical Assistant",
                        "email": "dpkata@nitsikkim.ac.in",
                        "phone": "+91 8116253535",
                        "image": "./img/dpkata@nitsikkim.ac.in.jpg",
                    },
                    {
                        "name": "Mr. Anil Gurjar",
                        "designation": "Technical Assistant",
                        "email": "anilgurjar@nitsikkim.ac.in",
                        "phone": "+91 9046157768",
                        "image": "./img/anilgurjar@nitsikkim.ac.in.jpg",
                    },
                    {
                        "name": "Mr. Pawan Kumar Kathaniya",
                        "designation": "Technical Assistant",
                        "email": "pawankkathaniya@nitsikkim.ac.in",
                        "phone": "+91 7479013222",
                        "image": "./img/pawankkathaniya@nitsikkim.ac.in.jpg",
                    },
                    {
                        "name": "Mr. Manish Kumar",
                        "designation": "Senior Technician",
                        "email": "manish705@nitsikkim.ac.in",
                        "phone": "+91 7431911006",
                        "image": "./img/manish705@nitsikkim.ac.in.jpg",
                    },
                    {
                        "name": "Mr. Saikat Mistry",
                        "designation": "Technician",
                        "email": "saikatmistry@nitsikkim.ac.in",
                        "phone": "+91 7044240359",
                        "image": "./img/saikatmistry@nitsikkim.ac.in.jpg",
                    },
                    {
                        "name": "Mr. Mahaveer Gurjar",
                        "designation": "Technician",
                        "email": "mahaveer@nitsikkim.ac.in",
                        "phone": "+91 9828249668",
                        "image": "./img/mahaveer@nitsikkim.ac.in.jpg",
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