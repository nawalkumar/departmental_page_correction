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
                    "name": "Anish Rai",
                    "email": "phph190006@nitsikkim.ac.in",
                    "phone": "+91 9851308392 / +91 8167763676",
                    "research_interest": "Nonlinear Time-series Analysis, Characterization of Stock Market",
                    "image": "./img/phph190006@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr.Md. Nurujjaman"
                },
                {
                    "name": "Salam Rabindrajit Luwang",
                    "email": "phph210015@nitsikkim.ac.in",
                    "phone": "+918448453342",
                    "research_interest": "Stock Market dynamics, Experimental Non-linear dynamics and Non-linear Time- series analysis",
                    "image": "./img/phph210015@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Md. Nurujjaman"
                },
                {
                    "name": "Santanu Sarkar",
                    "email": "phph210014@nitsikkim.ac.in / santanu.sarkar05@gmail.com",
                    "phone": "+91 8420820292 / +91 9051361047",
                    "research_interest": "Quantum Information Science",
                    "image": "./img/phph210014@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anindya Biswas"
                },
                {
                    "name": "Kundan Mukhia",
                    "email": "Email-kundanmukhia07@gmail.com / phph220026@nitsikkim.ac.in",
                    "phone": "+91 9547620946",
                    "research_interest": "Machine learning and Nonlinear Time Series Analysis of Stock Market",
                    "image": "./img/phph220026@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Md. Nurujjaman"
                },
                {
                    "name": "Sayan Sengupta",
                    "email": "sayandark92@gmail.com / phph220013@nitsikkim.ac.in",
                    "phone": "+91 7685932164",
                    "research_interest": "Quantum Information Science",
                    "image": "./img/phph220013@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anindya Biswas"
                },
                {
                    "name": "Ritwija Roy",
                    "email": "phph220027@nitsikkim.ac.in",
                    "phone": "+91 7003709257",
                    "research_interest": " Quantum Information Science",
                    "image": "./img/phph220027@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anindya Biswas"
                },
                {
                    "name": "Anish Sharma",
                    "email": "anishsharmasikkim@gmail.com / phph230017@nitsikkim.ac.in",
                    "phone": "+91 8343916174",
                    "research_interest": "Quantum Thermodynamics",
                    "image": "./img/phph230017@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anindya Biswas"
                },
                {
                    "name": "Buddha Nath Sharma",
                    "email": "phph230028@nitsikkim.ac.in",
                    "phone": "+91 8346954320",
                    "research_interest": "Topological Data Analysis, Nonlinear Dynamics",
                    "image": "./img/phph230028@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Md. Nurujjaman"
                }
            ],
            "projectBased": [
                
            ],
            "projectBased2": [
            ],
            "projectBased3": [
                {
                    "name": "Dr. Ajit Mahata",
                    "email": "phph16025@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Time Scales and Characteristics of Stock Markets",
                    "image": "./img/phph16025@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Md Nurujjaman",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. Arabinda Ghosh",
                    "email": "phee16023@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": " Intelligent load frequency controllers for Power Systems",
                    "image": "./img/phee16023@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anjan Kumar Ray and Dr. Md. Nurujjaman",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. George Biswas",
                    "email": "phph17001@nitsikkim.ac.in",
                    "phone": "+91 8101271166",
                    "Thesis": "Entanglement and Other Quantum Correlations in Many-Body Systems",
                    "image": "./img/phph17001@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Anindya Biswas",
                    "Defence_Date": "",
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