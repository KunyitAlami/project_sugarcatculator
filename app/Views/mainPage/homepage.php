<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Main Facility Sugar Catculator</title>
    <script>
        tailwind.config = {
            theme: {
            extend: {
                fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                },
            }
            }
        }
    </script>
    <style>
        .text-outline {
            text-shadow:
            -1px -1px 0 #B08968,
            1px -1px 0 #B08968,
            -1px  1px 0 #B08968,
            1px  1px 0 #B08968;
        }
    </style>
</head>

<body class="font-poppins bg-[#EDE0D4] text-[#7F5539]">
    <?= view('navbar/navbar-main') ?>
    <div class="flex-col">
        <!-- Bagian form untuk menghitung prediksi diabetes -->
        <div class="mt-12 max-w-screen flex bg-white rounded-lg shadow-lg ml-4 mr-4 mb-12 px-4">
            <!-- bagian sebelah kiri -->
            <div class="w-1/3 flex flex-col justify-center py-12 ml-12">
                <h1 class="text-6xl font-bold mb-4">
                    Predict Your
                </h1>
                <h1 class="text-6xl font-bold">
                    Obecity Risk
                </h1>
                <p class="mr-4 mt-10 text-justify">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi earum modi qui libero iste minus assumenda ipsum, ullam laborum nostrum aut. 
                    Illum architecto sapiente temporibus facilis laudantium suscipit, doloribus eius. Illum architecto sapiente temporibus facilis laudantium suscipit, doloribus eius.
                </p>
                <div class="mt-2 hover:text-black hover:underline">
                    <a href="/">Learn About The LightWeight Deep Learning Model</a>
                </div>
                <div class="mt-2 hover:text-black hover:underline">
                    <a href="/side/">Learn About The Parameters</a>
                </div>



            </div>
            
            <!-- bagian sebelah kanan -->
            <div class="w-2/3 ml-12">
                <form class="p-8 space-y-8 text-black" id="obesityForm" style="display: block;">
                    <!-- Personal Information Section -->
                    <div class="space-y-6">
                        <h3 class="text-xl text-[#7F5539] font-bold border-b-2 border-black pb-2">Personal Information</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Gender -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Gender</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <!-- Age -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Age</label>
                                <input type="number" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300" 
                                    name="age" placeholder="Enter your age" min="1" max="120">
                            </div>

                            <!-- Height -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Height (cm)</label>
                                <input type="number" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300" 
                                    name="height" placeholder="Enter height in cm" min="100" max="250" step="0.1">
                            </div>

                            <!-- Weight -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Weight (kg)</label>
                                <input type="number" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300" 
                                    name="weight" placeholder="Enter weight in kg" min="30" max="300" step="0.1">
                            </div>
                        </div>
                    </div>

                    <!-- Family History & Eating Habits -->
                    <div class="space-y-6">
                        <h3 class="text-xl text-[#7F5539] font-bold border-b-2 border-black pb-2">Family History & Eating Habits</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Family History -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Family History of Overweight</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="family_history_with_overweight">
                                    <option value="">Select Option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- FAVC -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Frequent High Caloric Food (FAVC)</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="FAVC">
                                    <option value="">Select Option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- FCVC -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Vegetable Consumption Frequency</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="FCVC">
                                    <option value="">Select Frequency</option>
                                    <option value="1">Never</option>
                                    <option value="2">Sometimes</option>
                                    <option value="3">Always</option>
                                </select>
                            </div>

                            <!-- NCP -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Number of Main Meals</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="NCP">
                                    <option value="">Select Number</option>
                                    <option value="1">1 meal</option>
                                    <option value="2">2 meals</option>
                                    <option value="3">3 meals</option>
                                    <option value="4">4+ meals</option>
                                </select>
                            </div>

                            <!-- CAEC -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Food Between Meals</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="CAEC">
                                    <option value="">Select Option</option>
                                    <option value="no">No</option>
                                    <option value="Sometimes">Sometimes</option>
                                    <option value="Frequently">Frequently</option>
                                    <option value="Always">Always</option>
                                </select>
                            </div>

                            <!-- SMOKE -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Smoking</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="SMOKE">
                                    <option value="">Select Option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Lifestyle Factors -->
                    <div class="space-y-6">
                        <h3 class="text-xl text-[#7F5539] font-bold border-b-2 border-black pb-2">Lifestyle Factors</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- CH2O -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Water Consumption (liters/day)</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="CH2O">
                                    <option value="">Select Amount</option>
                                    <option value="1">Less than 1L</option>
                                    <option value="2">1-2L</option>
                                    <option value="3">More than 2L</option>
                                </select>
                            </div>

                            <!-- SCC -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Calorie Monitoring</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="SCC">
                                    <option value="">Select Option</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- FAF -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Physical Activity Frequency</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="FAF">
                                    <option value="">Select Frequency</option>
                                    <option value="0">Never</option>
                                    <option value="1">1-2 days/week</option>
                                    <option value="2">3-4 days/week</option>
                                    <option value="3">5+ days/week</option>
                                </select>
                            </div>

                            <!-- TUE -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Technology Use (hours/day)</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="TUE">
                                    <option value="">Select Hours</option>
                                    <option value="0">0-2 hours</option>
                                    <option value="1">3-5 hours</option>
                                    <option value="2">6+ hours</option>
                                </select>
                            </div>

                            <!-- CALC -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Alcohol Consumption</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="CALC">
                                    <option value="">Select Option</option>
                                    <option value="no">No</option>
                                    <option value="Sometimes">Sometimes</option>
                                    <option value="Frequently">Frequently</option>
                                    <option value="Always">Always</option>
                                </select>
                            </div>

                            <!-- MTRANS -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Transportation Mode</label>
                                <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 bg-white" name="MTRANS">
                                    <option value="">Select Mode</option>
                                    <option value="Walking">Walking</option>
                                    <option value="Bike">Bike</option>
                                    <option value="Motorbike">Motorbike</option>
                                    <option value="Public_Transportation">Public Transportation</option>
                                    <option value="Automobile">Automobile</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex pt-2">
                        <button type="submit" class="bg-gradient-to-r from-[#E6CCB2] to-[#B08968] text-white px-5 py-3 rounded-2xl font-semibold text-sm shadow-lg hover:from-[#B08968] hover:to-[#9C6644] transition-all duration-300 hover:shadow-xl">
                            Calculate Obesity Risk
                        </button>
                    </div>
                </form>

                <!-- result menu -->
                 
                <div class="mt-10" style="display: none;" id="resultMenu">
                    <div class="text-center mb-4">
                        <h1 class="text-4xl font-bold">Prediction Result</h1>
                    </div>
                    <div class="text-justify">
                        <!-- Result From FastAPI -->
                            <!-- Prediction -->
                            <div class="font-bold mb-6">
                                <p>Obecity Level: </p>
                                <p id="prediction_result"></p>
                            </div>
                            <!-- Accuracy -->
                            <div class="font-bold mb-6">
                                <p>Accucary Prediction: </p>
                                <p id="accucary_prediction"></p>
                            </div>
                            <!-- Risk Level -->
                            <div class="font-bold mb-6">
                                <p>Risk Level: </p>
                                <p id="accucary_prediction"></p>
                            </div>
                            <div class="font-bold mb-2">
                                <p>Explaination: </p>
                            </div>
                            <div class="text-justify mr-12 mb-6">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum recusandae modi laboriosam ducimus iusto. 
                                    Eveniet nesciunt architecto quae praesentium tenetur expedita vel nostrum, sapiente adipisci perferendis doloremque, 
                                    libero, repudiandae odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum recusandae modi laboriosam 
                                    ducimus iusto. Eveniet nesciunt architecto quae praesentium tenetur expedita vel nostrum, sapiente adipisci perferendis doloremque, 
                                    libero, repudiandae odit?
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum recusandae modi laboriosam ducimus iusto. 
                                    Eveniet nesciunt architecto quae praesentium tenetur expedita vel nostrum, sapiente adipisci perferendis doloremque, 
                                    libero, repudiandae odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum recusandae modi laboriosam 
                                    ducimus iusto. Eveniet nesciunt architecto quae praesentium tenetur expedita vel nostrum, sapiente adipisci perferendis doloremque, 
                                    libero, repudiandae odit?
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum recusandae modi laboriosam ducimus iusto. 
                                    Eveniet nesciunt architecto quae praesentium tenetur expedita vel nostrum, sapiente adipisci perferendis doloremque, 
                                    libero, repudiandae odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum recusandae modi laboriosam 
                                    ducimus iusto. Eveniet nesciunt architecto quae praesentium tenetur expedita vel nostrum, sapiente adipisci perferendis doloremque, 
                                    libero, repudiandae odit?
                                </p>
                            </div>
                            
                            <!-- Reset Button -->
                            <div class="flex pt-2 mb-12">
                                <button id="resetBtn" type="button" class="bg-gradient-to-r from-[#E6CCB2] to-[#B08968] text-white px-5 py-3 rounded-2xl font-semibold text-sm shadow-lg hover:from-[#B08968] hover:to-[#9C6644] transition-all duration-300 hover:shadow-xl">
                                    Calculate Again
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div>

        </div>

        <!-- Bagian form untuk menjelaskan paramater yang digunakan -->
        <div class="m-5 max-w-screen bg-white rounded-lg shadow-lg ml-4 mr-4 mb-12 px-4 py-10">
            <div class="text-center mb-10">
                <h1 class="font-bold text-7xl mb-2">
                    The Parameters
                </h1>
                <p class="text-xl ml-24 mr-24">
                    Understanding the key factors that contribute to obesity risk is essential for prevention and management. 
                    These parameters represent the most significant lifestyle, biological, and behavioral indicators that research has identified as 
                    influential in determining an individual's likelihood of developing obesity. By examining these interconnected factors, we can better 
                    understand how daily choices, genetic predisposition, and environmental influences work together to impact body weight and overall 
                    health outcomes.
                </p>
            </div>
            <div>
                <?= view('mainPage/cardParameter') ?>
            </div>


        </div>
    </div>
 
    <div>
        <?= view('footer/footer') ?>
    </div>
    <script>
        const menuPertama = document.getElementById('obesityForm');
        const menuKedua = document.getElementById('resultMenu');

        menuPertama.addEventListener('submit', function (e) {
            e.preventDefault();
            menuPertama.style.display='none';
            menuKedua.style.display='block';
        });

        document.getElementById('resetBtn').addEventListener('click', function () {
            menuPertama.style.display='block';
            menuKedua.style.display='none';
        });
    </script>
</body>