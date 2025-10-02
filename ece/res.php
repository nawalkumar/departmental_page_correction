<?php include "../header.php" ?>

<body class="bg-gray-100">

    <div class="bg-white rounded-lg gap-3 flex flex-col max-w-7xl mx-auto">
        <div class="white ">
            <div class="p-0">
                <div id="header" class="flex items-center"></div>
                <div class="flex items-center">
                    <i class=" fa fa-user text-gray-400"></i>
                    <div id="breadcrumb" class="text-red-900 text-sm font-medium ml-2">People</div>
                </div>
                <hr class="border-t-4 border-yellow-600 w-full mb-1">
            </div>
        </div>
        <div class="projects flex flex-col items-center w-full gap-5">
            <div class="rounded-xl w-full border-2 border-gray-200 shadow-md">

                <div class="flex flex-col items-center min-h-screen p-6">
                    <div class="flex justify-center items-center p-4">
                        <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Institute Research Scholars (Full Time)</div>
                    </div>
                    <div id="fullTimeContainer"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div>

                    <div class="flex justify-center items-center p-4">
                        <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Institute Research Scholars (Under Various Projects/Schemes)</div>
                    </div>
                    <div id="projectContainer"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div>
                    <div class="flex justify-center items-center p-4">
                        <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Institute Research Scholars (Part Time)</div>
                    </div>
                    <div id="projectContainer2"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div>
                    <div class="flex justify-center items-center p-4">
                        <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Awarded</div>
                    </div>
                    <div id="projectContainer3"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const professorData = {
            "fullTime": [
                {
                    "name": "Mr. Arnab Som",
                    "email": "phec190004@nitsikkim.ac.in",
                    "phone": "+91 8584863374",
                    "research_interest": "Modelling and Design of Semiconductor Devices",
                    "image": "./img/phec190004@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sanjay Kumar Jana"
                },
                 {
                    "name": "Mr. Dheeraj Pandey",
                    "email": "phec210008@nitsikkim.ac.in",
                    "phone": "+91-9456566119",
                    "research_interest": "Multifunctional Antenna",
                    "image": "./img/Phec210008@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Surajit Kundu"
                },
                 {
                    "name": "Mr. Sanoj Mahato",
                    "email": "phec220008@nitsikkim.ac.in",
                    "phone": "+91-8170888821",
                    "research_interest": "DESIGN ANALYSIS AND PERFORMANCE EVOLUTION OF A WIDE-BAND/ MULTIBAND MSA",
                    "image": "./img/phec220008@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Reshmi Dhara"
                },
                 {
                    "name": "Ms. Tshering Sangmo Sherpa",
                    "email": "phec220009@nitsikkim.ac.in",
                    "phone": "+91-8101590046",
                    "research_interest": " Analog MOS IC Design",
                    "image": "./img/phec220009@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sanjay Kumar Jana"
                },
                 {
                    "name": "Ms. Neelam Singh",
                    "email": "phec220025@nitsikkim.ac.in",
                    "phone": "+91- 8707050762",
                    "research_interest": "ULTRA-THIN POLARIZATION-INSENSITIVE METAMATERIAL ABSORBER FOR VARIOUS APPLICATIONS",
                    "image": "./img/phec220025@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Reshmi Dhara"
                },
                 {
                    "name": "Mr. U.Laxman Kumar",
                    "email": "phec220031@nitsikkim.ac.in",
                    "phone": "+91-9966079497",
                    "research_interest": " Signal processing (machine learning)",
                    "image": "./img/phec220031@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Hemant Kumar Kathania"
                },
                 {
                    "name": "Paban Sapkota",
                    "email": "phec230006@nitsikkim.ac.in",
                    "phone": "+91-6900338357",
                    "research_interest": "Speech Signal Processing and Automatic Dysarthric Speech Recognition systems",
                    "image": "./img/phec230006@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Hemant Kumar Kathania"
                },
                 {
                    "name": "Sriparna Sarma",
                    "email": "phec230007@nitsikkim.ac.in",
                    "phone": "+91-8876430890",
                    "research_interest": "Analog RF IC Design",
                    "image": "./img/phec230007@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sanjay Kumar Jana"
                },
                 {
                    "name": "Abhijit Sinha",
                    "email": "phec230023@nitsikkim.ac.in",
                    "phone": "+91-8402893813",
                    "research_interest": "Speech Processing",
                    "image": "./img/phec230023@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Hemant Kumar Kathania"
                }

               
            ],
            "projectBased": [],
            "projectBased2": [
                {
                    "name": "Mr. Keshab Das",
                    "email": "phec160011@nitsikkim.ac.in",
                    "phone": "+91 9749432192",
                    "research_interest": "Analog IC design",
                    "image": "./img/phec160011@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sanjay Kumar Jana"
                }
            ],
            "projectBased3": [
                {
                    "name": "Dr. Hemant Kumar Kathania",
                    "email": "hemant.ece@nitsikkim.ac.in",
                    "phone": "+91 9732900589",
                    "Thesis": "Role of Prosodic Features and Prosody Modification in Improving Children’s mismatched ASR",
                    "image": "./img/hemant.ece@nitsikkim.ac.in.jpg",
                    "Supervisor": "1.Prof. A.B. Samaddar(Supervisor) 2.Dr.Sanjay Kumar Jana(Co. Supervisor)",

                },
                {
                    "name": "Dr. Surajit Kundu",
                    "email": "surajit.kundu@nitsikkim.ac.in",
                    "phone": "+91 9832271039",
                    "Thesis": "Design, Development and Performance Evaluation of Ultra-wideband Printed Antennas with Radiation Improvement for Ground Penetrating Radar Application",
                    "image": "./img/surajit.kundu@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sanjay Kumar Jana",

                },
                {
                    "name": "Dr. Reshmi Dhara",
                    "email": "reshmidhara@nitsikkim.ac.in",
                    "phone": "+91 9330958570",
                    "Thesis": " Design, Development and Performance Evaluation of Printed Antennas With Polarization Diversity And Multiband Characteristics For Wireless Communication Application",
                    "image": "./img/reshmidhara@nitsikkim.ac.in.jpg",
                    "Supervisor": "1.Dr. Sanjay Kumar Jana 2.Prof. M. M. Sharma(Joint-Supervisor)",

                },
                {
                    "name": "Dr. Subhanil Maity",
                    "email": "phec16014@nitsikkim.ac.in",
                    "phone": "+91 9002930642",
                    "Thesis": "Design of Power and Area Optimised High-Speed Frequency Divider",
                    "image": "./img/phec16014@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sanjay Kumar Jana",

                },
                {
                    "name": "Dr. Priti Gupta",
                    "email": "pritigupta@nitsikkim.ac.in",
                    "phone": "+91 7478814956",
                    "Thesis": "Design of transconductance-capacitance based loop filter for PLL application",
                    "image": "./img/pritigupta@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sanjay Kumar Jana",

                },
                {
                    "name": "Dr. Nigidita Pradhan",
                    "email": "nigidita@nitsikkim.ac.in",
                    "phone": "+91 9735995400",
                    "Thesis": "Design and analysis of phase-frequency detector and charge pump for phase-locked loop application",
                    "image": "./img/nigidita@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sanjay Kumar Jana",
                },
                {
                    "name": "Dr. Somnath Mahato",
                    "email": "phec190002@nitsikkim.ac.in",
                    "phone": "+91 9007711636",
                    "Thesis": "Multi-Constellation Global Navigation Satellite System in Standalone and Real Time Kinematic Operation towards Enhanced Position Solution Accuracy",
                    "image": "./img/phec190002@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Surajit Kundu",

                },
                {
                    "name": "Dr. Atanu Santra",
                    "email": "phec190003@nitsikkim.ac.in",
                    "phone": "+91 7908050160",
                    "Thesis": "Indian Navigation System (NavIC) and Its Advantages",
                    "image": "./img/phec190003@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Surajit Kundu",

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
                <div class="text-center">
                    <p class="text-sm text-gray-500">${professor.email}</p>
                    <p class="text-sm text-gray-500">${professor.phone || 'Not provided'}</p>
                    <p class="text-xs text-gray-400 mt-2">Research Interest: ${professor.research_interest}</p>
                    <p class="text-sm text-gray-600 mt-1">Supervisor: ${professor.Supervisor}</p>
                </div>
            </div>
        `;
        }

        function generateProfessorCard2(professor) {
            const imageContent = professor.image
                ? `<div class="flex justify-center"><img src="${professor.image}" alt="${professor.name}" class="professor-image"></div>`
                : `<div class="flex justify-center"><div class="empty-image"><span class="text-gray-500">No Image</span></div></div>`;

            return `
            <div class="border-2 border-red-700 rounded-lg p-6 shadow-md bg-white professor-card">
                ${imageContent}
                <h2 class="text-lg font-bold text-center">${professor.name}</h2>
                <div class="text-center">
                    <p class="text-sm text-gray-500">${professor.email}</p>
                    <p class="text-sm text-gray-500">${professor.phone || 'Not provided'}</p>
                    <p class="text-sm text-gray-500 mt-2">Thesis: ${professor.Thesis}</p>
                    <p class="text-sm text-gray-600 mt-1">Supervisor: ${professor.Supervisor}</p>
                    <p class="text-sm text-gray-600 mt-1">Defence Date: ${professor.Defence_Date || 'Not provided'}</p>
                </div>
            </div>
        `;
        }

        function loadProfessorCards(containerId, professors) {
            const container = document.getElementById(containerId);
            container.innerHTML = professors.map(generateProfessorCard).join('');
        }

        function loadProfessorCards2(containerId, professors) {
            const container = document.getElementById(containerId);
            container.innerHTML = professors.map(generateProfessorCard2).join('');
        }

        loadProfessorCards("fullTimeContainer", professorData.fullTime);
        loadProfessorCards("projectContainer", professorData.projectBased);
        loadProfessorCards("projectContainer2", professorData.projectBased2);
        loadProfessorCards2("projectContainer3", professorData.projectBased3);
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .professor-image {
            width: 150px;
            height: 150px;
            object-fit: contain;
            object-position: center;
            margin-bottom: 0.75rem;
            border: none;
            border-radius: 0;
            background-color: transparent;
        }

        .empty-image {
            width: 150px;
            height: 150px;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.75rem;
            border: none;
            border-radius: 0;
        }
    </style>
</body>

<?php include "../footer.php" ?>