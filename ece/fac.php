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
                        "name": "Dr. Hemant Kumar Kathania",
                        "designation": "Assistant Professor Head of Department",
                        "email": "hemant.ece@nitsikkim.ac.in",
                        "phone": "+91 9732900589",
                        "research_interest": "Speech and Signal Processing",
                        "image": "./img/hemant.ece@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ece.nitsikkim.ac.in/profile.php?sn=41"
                    },
                    {
                        "name": "Dr. Sanjay Kumar Jana",
                        "designation": "Associate Professor",
                        "email": "skjnit@nitsikkim.ac.in",
                        "phone": "+91 9476102775",
                        "research_interest": "Growth, characterization and Fabribication of III-V based high electron mobility transistor (HEMT) and LED on Si substrate. , Main research interest in Growth by MBE and MOCVD and characterization by HRXRD, ECV, Hall and PL.",
                        "image": "./img/skjnit@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ece.nitsikkim.ac.in/profile.php?sn=4"
                    },
                    {
                        "name": "Dr. Reshmi Dhara",
                        "designation": "Assistant Professor",
                        "email": "reshmidhara@nitsikkim.ac.in",
                        "phone": "+91 7479013225",
                        "research_interest": "Electronics Device and Circuit, Communication, Antenna.",
                        "image": "./img/reshmidhara@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ece.nitsikkim.ac.in/profile.php?sn=22"
                    },
                    {
                        "name": "Dr. Jeetendra Singh",
                        "designation": "Assistant Professor",
                        "email": "jeetendra@nitsikkim.ac.in",
                        "phone": "+91 8729098787",
                        "research_interest": "Modeling and Simulation of Novel Semiconductor Devices, Digital Systems/Embedded/SOC Design and FPGA Implementation, Mixed Signal (Analog/Digital) VLSI Design, MOS based Biosensor Design.",
                        "image": "./img/jeetendra@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ece.nitsikkim.ac.in/profile.php?sn=793"
                    },
                    {
                        "name": "Dr. Vishal Vishnoi",
                        "designation": "Assistant Professor",
                        "email": "vishal.vishnoi@nitsikkim.ac.in",
                        "phone": "+91 9855273397",
                        "research_interest": "Process Control and Modelling, Control System, Soft Computing",
                        "image": "./img/vishal.vishnoi@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ece.nitsikkim.ac.in/profile.php?sn=845"
                    },
                    {
                        "name": "Dr. Varun Gupta",
                        "designation": "Assistant Professor",
                        "email": "varungupta@nitsikkim.ac.in",
                        "phone": "+91 9045440911",
                        "research_interest": "Biomedical Signal Processing (BSP), Pattern Recognition, Digital Signal Processing (DSP), Control System, Analog and Digital Circuits, Network Analysis & Synthesis (NAS), Electromagnetic Field Theory (EMFT), and Soft Computing",
                        "image": "./img/varungupta@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ece.nitsikkim.ac.in/profile.php?sn=855"
                    },
                    {
                        "name": "Dr. Sudipta Das",
                        "designation": "Temporary Faculty",
                        "email": "sudipta@nitsikkim.ac.in",
                        "phone": "+91 9903252279",
                        "research_interest": "Antennas and Antenna Arrays, Evolutionary Algorithms, Multiobjective Optimization",
                        "image": "./img/sudipta@nitsikkim.ac.in.jpg",
                        "profile_link": "https://ece.nitsikkim.ac.in/profile.php?sn=795"
                    },
                ],
                "staff": [
                    {
                        "name": "Mr. Amit Tamang",
                        "designation": "Senior Technical Assistant",
                        "email": "amit.tamang@nitsikkim.ac.in",
                        "phone": "+91 7479013245",
                        "image": "./img/tapanchettri@nitsikkim.ac.in.jpg",
                    },
                    {
                        "name": "Mr. Sidharth Pradhan",
                        "designation": "Senior Technician",
                        "email": "sid26@nitsikkim.ac.in",
                        "phone": "+91 7479013246",
                        "image": "./img/tapanchettri@nitsikkim.ac.in.jpg",
                    },
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