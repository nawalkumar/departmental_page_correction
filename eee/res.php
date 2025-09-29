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

                    <!-- <div class="flex justify-center items-center p-4">
                        <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Institute Research Scholars (Under Various Projects/Schemes)</div>
                    </div>
                    <div id="projectContainer"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div> -->
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
                    "name": "Mr. Romio Atha",
                    "email": "phee190005@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Power Systems Protection using Artificial Intelligence",
                    "image": "./img/phee190005@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sourav Mallick"
                },
                {
                    "name": "Mr. Avismit Dutta",
                    "email": "",
                    "phone": "",
                    "research_interest": " Performance analysis of motor drives in Electric Vehicle",
                    "image": "./img/avismit_dutta.jpg",
                    "Supervisor": "Dr. Aurdobinda Panda"
                },
                {
                    "name": "Mr. Islavatu Srikanth",
                    "email": "phee210004@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Power Quality",
                    "image": "./img/phee210004@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Pradeep Kumar"
                },
                {
                    "name": "Mr. Omkar Singh",
                    "email": "",
                    "phone": "",
                    "research_interest": "Control applications in robotics and intelligent systems",
                    "image": "./img/omkar_singh.jpg",
                    "Supervisor": "Dr. Anjan Kumar Ray"
                },
                {
                    "name": "Mr. Chandan Kumar",
                    "email": "phee220021@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Application Of Intelligent Control",
                    "image": "./img/phee220021@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anjan Kumar Ray"
                },
                {
                    "name": "Ms. Tumpa Das",
                    "email": "phee220005@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Design and prototyping of domestic induction heater for cooking application.",
                    "image": "./img/phee220005@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Molay Roy"
                },
                {
                    "name": "Mr. Chayan Chakraborty",
                    "email": "phee230005@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "AI based Robotics",
                    "image": "./img/phee230005@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anjan Kumar Ray"
                },
                {
                    "name": "Ms. Promila Das",
                    "email": "phee230004@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Power Quality Analysis",
                    "image": "./img/phee230004@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Pradeep Kumar"
                },
                {
                    "name": "Mr. Saurav Ghosh",
                    "email": "phee230003@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Power System",
                    "image": "./img/phee230003@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sourav Mallick"
                },
                {
                    "name": "Mr. Madhuraj",
                    "email": "phee230026@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Power System (Renewable energy integration)",
                    "image": "./img/phee230026@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sourav Mallick"
                },
                {
                    "name": "Mr. Roshan Pariyar",
                    "email": "phee230038@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Fuel Cell Hybrid Electric Vehicle",
                    "image": "./img/phee230038@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Aurobinda Panda"
                },
                {
                    "name": "Mr. Satish kumar",
                    "email": "phee230039@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": " Power Quality(FACTS)",
                    "image": "./img/phee230039@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Pradeep Kumar"
                },
                {
                    "name": "Mr. Shatabda Bandyopadhyay",
                    "email": "phee230040@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Power System",
                    "image": "./img/phee230040@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sourav Mallick"
                },
                 {
                    "name": "Mr. Sumit Kumar",
                    "email": "phee230041@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Automatic Generation Control",
                    "image": "./img/phee230041@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Nimai Charan Patel"
                },
                 {
                    "name": "Ms. Geeta Srivastava",
                    "email": "phee230027@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": " Intelligent control system",
                    "image": "./img/phee230027@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anjan Kumar Ray"
                }
            ],
            "projectBased": [
              
            ],
            "projectBased2": [
                 {
                    "name": "Mr. Pratik Pradhan",
                    "email": "",
                    "phone": "",
                    "research_interest": "Electric vehicle",
                    "image": "./img/pratik-pradhan.jpg",
                    "Supervisor": "Dr. Aurobinda Panda"
                }
            ],
            "projectBased3": [
                {
                    "name": "Dr. Arindam Singha",
                    "email": "phee16001@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Intelligent Networked Robotic Systems",
                    "image": "./img/phee16001@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anjan Kumar Ray and Prof. Arun Baran Samaddar",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. Roshan Pradhan",
                    "email": "phee16002@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Power Converter Applications on Renewable Energy Sources",
                    "image": "./img/phee16002@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Aurdobinda Panda",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. Amit Kumar",
                    "email": "phee170003@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Power Quality Improvement Using Custom Power Devices",
                    "image": "./img/phee170003@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Pradeep Kumar",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. Arabinda Ghosh",
                    "email": "phee16023@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Intelligent control systems",
                    "image": "./img/phee16023@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anjan Kumar Ray and Dr. Md. Nurujjaman",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. Debanjan Mukherjee",
                    "email": "phee170005@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Power Line Harmonic Reduction using FACTS.",
                    "image": "./img/phee170005@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sourav Mallick",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. Sudhansu Das",
                    "email": "phee16028@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Design and Applications of Z-source inverter",
                    "image": "./img/phee16028@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Aurobindo Panda",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. Rajanikanta Sahoo",
                    "email": "phee180001@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Design and control of multilevel inverter for home appliances",
                    "image": "./img/phee180001@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Molay Roy",
                    "Defence_Date": "",
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
        // loadProfessorCards("projectContainer", professorData.projectBased);
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