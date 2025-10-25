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
                        "name": "Dr. Pratyay Kuila",
                        "designation": "Associate Professor, Head of Department, Dean R&C",
                        "email": "pratyay.kuila@nitsikkim.ac.in",
                        "phone": "+91-7479013224",
                        "research_interest": "Evolutionary Algorithms, AI and Machine Learning, Quantum-Inspired Algorithm, Mobile Fog and Edge Computing, Wireless Sensor Networks",
                        "image": "./img/pratyay_kuila@nitsikkim.ac.in.jpg",
                        "profile_link": "https://cse.nitsikkim.ac.in/profile.php?sn=67"
                    },
                    {
                        "name": "Dr. Sangram Roy",
                        "designation": "Associate Professor",
                        "email": "sray.cse@nitsikkim.ac.in",
                        "phone": "+91-9630257654",
                        "research_interest": "Public Key Infrastructure (PKI), Elliptic Curve Cryptography (ECC), Remote server authentication, Secure e/m-applications, Content Centric Network, Internet-of-Things (IoT), Post Quantum Cryptography, Blockchain Technology",
                        "image": "./img/sray.cse@nitsikkim.ac.in.jpg",
                        "profile_link": "https://cse.nitsikkim.ac.in/profile.php?sn=829"
                    },
                    {
                        "name": "Dr. Md. Sarfaraj Alem Ansari",
                        "designation": "Assistant Professor",
                        "email": "sarfaraj@nitsikkim.ac.in",
                        "phone": "+91-9332432995",
                        "research_interest": "Peer-to-Peer Networks, Blockchain Technology, Network Security, Software Defined Networks, Internet of Things, Cloud Computing and Machine Learning",
                        "image": "./img/sarfaraj@nitsikkim.ac.in.jpg",
                        "profile_link": "https://cse.nitsikkim.ac.in/profile_sn1.php?sn=1"
                    },
                    {
                        "name": "Dr. Pankaj Kumar Keserwani",
                        "designation": "Assistant Professor",
                        "email": "pankajkeserwani.cse@nitsikkim.ac.in",
                        "phone": "+91-9867067779",
                        "research_interest": "Application of Optimization and Machine/Deep Learning",
                        "image": "./img/pankajkeserwani.cse@nitsikkim.ac.in.jpg",
                        "profile_link": "https://cse.nitsikkim.ac.in/profile.php?sn=43"
                    },
                    {
                        "name": "Dr. Krishna Kumar",
                        "designation": "Assistant Professor",
                        "email": "krishnakumar@nitsikkim.ac.in",
                        "phone": "+91-8095253170",
                        "research_interest": "Time-Series Sequential Data Analysis, Brain and Nature Inspired Computing, AI and Machine Learning, Knowledge-Based System",
                        "image": "./img/krishnakumar@nitsikkim.ac.in.jpg",
                        "profile_link": "https://cse.nitsikkim.ac.in/profile.php?sn=827"
                    },
                    {
                        "name": "Dr. Bam Bahadur Sinha",
                        "designation": "Assistant Professor",
                        "email": "bambahadursinha@nitsikkim.ac.in",
                        "phone": "+91-9199610251",
                        "research_interest": "Artificial Intelligence & Machine Learning, Deep Learning, Optimization Techniques, Recommender Systems",
                        "image": "./img/bambahadursinha@nitsikkim.ac.in.jpg",
                        "profile_link": "https://cse.nitsikkim.ac.in/profile.php?sn=850"
                    },
                    {
                        "name": "Mr. Arunanshu Pal",
                        "designation": "Temporary Faculty",
                        "email": "arunanshupal@nitsikkim.ac.in",
                        "phone": "+91-9432149897",
                        "research_interest": "Mobile Ad hoc Networks, Intelligent Transportation Systems, Computer Networks, Data Structures and Algorithms, Object-Oriented Programming, Logic in Computer Science",
                        "image": "./img/arunangshupal@nitsikkim.ac.in.jpg",
                        "profile_link": "https://cse.nitsikkim.ac.in/profile.php?sn=828"
                    },
                    {
                        "name": "Dr. Diksha Rangewani",
                        "designation": "Temporary Faculty",
                        "email": "diksharangewani@nitsikkim.ac.in",
                        "phone": "+91-7737296628",
                        "research_interest": "Energy-Efficient Authentication Protocols, Machine Learning-based Authentication Protocols, Network Security",
                        "image": "./img/diksharangwani@nitsikkim.ac.in.jpg",
                        "profile_link": "https://cse.nitsikkim.ac.in/profile.php?sn=849"
                    },
                    {
                        "name": "Ms. Minakshi Boruah",
                        "designation": "Temporary Faculty",
                        "email": "minakshi.boruah@nitsikkim.ac.in",
                        "phone": "",
                        "research_interest": "Artificial Intelligence, Machine Learning, Deep Learning, Computational Biology",
                        "image": "./img/minakshi.boruah@nitsikkim.ac.in.jpg",
                        "profile_link": "https://cse.nitsikkim.ac.in/profile.php?sn=856"
                    }
                ],
                "staff": [
                    {
                        "name": "Mr. Tapan Chhetri",
                        "designation": "Senior Technician",
                        "email": "tapanchettri@nitsikkim.ac.in",
                        "phone": "+91 9775963115",
                        "image": "./img/tapanchettri@nitsikkim.ac.in.jpg",
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