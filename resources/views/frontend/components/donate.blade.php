@extends('layouts.front', ['pageTitle' => 'Dpp | Donation'])
@section('content')
    <!-- Background Image Section with Overlay -->
    <div class="background-container-donate">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link">Donate</div>
            <a href="{{ route('welcome') }}" class="contact-text">home / Donate</a>
        </div>
    </div>

    <!-- Donate Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Make a Donation</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Your generous contribution helps us continue
                our mission. Every donation, no matter the size, makes a difference in our community.</p>



            <!-- Donation Container with Form and Image -->
            <div class="flex flex-col lg:flex-row rounded-xl overflow-hidden shadow-xl">
                <!-- Donation Form (70%) -->
                <div class="w-full lg:w-[70%] bg-gray-50 p-6 md:p-10">
                    <h3 class="text-2xl font-semibold mb-6">Donation Details</h3>

                    <!-- Donation Form -->
                    <form id="donationForm" class="space-y-6">
                        <!-- Donation Amount -->
                        <div class="space-y-2">
                            <label for="donationAmount" class="block text-sm font-medium text-gray-700">
                                Donation Amount <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="text" id="donationAmount" name="donationAmount"
                                    placeholder="Enter donation amount"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                            </div>
                        </div>


                        <!-- Donation Frequency -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Donation Frequency</label>
                            <div class="flex flex-wrap gap-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="frequency"
                                        value="once" checked>
                                    <span class="ml-2">One Time</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="frequency"
                                        value="monthly">
                                    <span class="ml-2">Monthly</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="frequency"
                                        value="quarterly">
                                    <span class="ml-2">Quarterly</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="frequency"
                                        value="yearly">
                                    <span class="ml-2">Yearly</span>
                                </label>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="space-y-4">
                            <h4 class="text-lg font-medium">Personal Information</h4>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Full Name -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-500"></i>
                                    </div>
                                    <input type="text" name="fullName" id="fullName" placeholder="Full Name" required
                                        class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                </div>

                                <!-- Email -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-gray-500"></i>
                                    </div>
                                    <input type="email" name="email" id="email" placeholder="Email Address" required
                                        class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                </div>

                                <!-- Phone -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-phone text-gray-500"></i>
                                    </div>
                                    <input type="tel" name="phone" id="phone" placeholder="Phone Number"
                                        class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                </div>

                                <!-- Country -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-globe text-gray-500"></i>
                                    </div>
                                    <select name="country" id="country"
                                        class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                        <option value="" selected disabled>Select Country</option>
                                        <option value="usa">United States</option>
                                        <option value="canada">South Africa</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="malawi">Malawi</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Information -->
                        <div class="space-y-4">
                            <h4 class="text-lg font-medium">Payment Information</h4>

                            <!-- Payment Methods Toggle -->
                            <div class="flex flex-wrap gap-4 mb-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="paymentMethod"
                                        value="card" checked>
                                    <span class="ml-2">Credit Card</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="paymentMethod"
                                        value="paypal">
                                    <span class="ml-2">PayPal</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-[var(--theme-color)]" name="paymentMethod"
                                        value="bank">
                                    <span class="ml-2">Bank Transfer</span>
                                </label>
                            </div>

                            <!-- Credit Card Information (Default) -->
                            <div id="cardPaymentMethod" class="payment-method-section space-y-4">
                                <!-- Card Number -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-credit-card text-gray-500"></i>
                                    </div>
                                    <input type="text" name="cardNumber" id="cardNumber" placeholder="Card Number"
                                        class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <!-- Expiry Month -->
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-calendar text-gray-500"></i>
                                        </div>
                                        <select name="expiryMonth" id="expiryMonth"
                                            class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                            <option value="" selected disabled>Month</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>

                                    <!-- Expiry Year -->
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-calendar text-gray-500"></i>
                                        </div>
                                        <select name="expiryYear" id="expiryYear"
                                            class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                            <option value="" selected disabled>Year</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                        </select>
                                    </div>

                                    <!-- CVV -->
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-lock text-gray-500"></i>
                                        </div>
                                        <input type="text" name="cvv" id="cvv" placeholder="CVV" maxlength="4"
                                            class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]">
                                    </div>
                                </div>
                            </div>

                            <!-- PayPal Method (Hidden by default) -->
                            <div id="paypalPaymentMethod"
                                class="payment-method-section hidden text-center p-6 border border-gray-200 rounded-md">
                                <i class="fab fa-paypal text-blue-600 text-4xl mb-3"></i>
                                <p>You will be redirected to PayPal to complete your donation after submission.</p>
                            </div>

                            <!-- Bank Transfer Method (Hidden by default) -->
                            <div id="bankPaymentMethod"
                                class="payment-method-section hidden p-6 border border-gray-200 rounded-md">
                                <p class="mb-4">Please use the following bank details to make your donation:</p>

                                <!-- Bank Details Grid -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <!-- National Bank Details -->
                                    <div class="pb-4 border-b border-gray-300 md:border-b-0">
                                        <p class="font-semibold">Bank Name:</p>
                                        <p>National Bank</p>
                                        <p class="font-semibold mt-2">Account Name:</p>
                                        <p>Organization Name</p>
                                        <p class="font-semibold mt-2">Account Number:</p>
                                        <p>1234-5678-9012-3456</p>

                                    </div>

                                    <!-- Standard Bank Details -->
                                    <div class="pt-4 md:pt-0">
                                        <p class="font-semibold">Bank Name:</p>
                                        <p>Standard Bank</p>
                                        <p class="font-semibold mt-2">Account Name:</p>
                                        <p>Organization Name</p>
                                        <p class="font-semibold mt-2">Account Number:</p>
                                        <p>9876-5432-1098-7654</p>

                                    </div>
                                </div>

                                <!-- Screenshot Upload -->
                                <div class="mt-6">
                                    <label for="transactionScreenshot"
                                        class="block text-sm font-medium text-gray-700">Upload Transaction
                                        Screenshot:</label>
                                    <input type="file" id="transactionScreenshot" name="transactionScreenshot"
                                        accept="image/*"
                                        class="mt-1 block w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                                        onchange="handleImageUpload(event)">
                                    <!-- Image Preview -->
                                    <div id="imagePreview" class="mt-4">
                                        <p class="text-sm text-gray-500">No image selected.</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Comment -->
                        <div class="relative">
                            <div class="absolute top-3 left-3 flex items-start pointer-events-none">
                                <i class="fas fa-comment text-gray-500"></i>
                            </div>
                            <textarea name="comment" id="comment" rows="3" placeholder="Leave a comment (optional)"
                                class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[var(--theme-color)] focus:border-[var(--theme-color)]"></textarea>
                        </div>

                        <!-- Privacy Policy and Terms -->
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" required
                                    class="focus:ring-[var(--theme-color)] h-4 w-4 text-[var(--theme-color)] border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-medium text-gray-700">
                                    <label for="terms" class="font-medium text-gray-700">I agree to the <a href="#"
                                            class="text-[var(--theme-color)] hover:underline">Terms of
                                            Service</a> and <a href="#"
                                            class="text-[var(--theme-color)] hover:underline">Privacy
                                            Policy</a></label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full bg-[var(--theme-color)] hover:bg-[var(--custom-orange)] text-white font-bold py-3 px-6 rounded-md transition-colors duration-300 flex items-center justify-center">
                                <i class="fas fa-heart mr-2"></i> Donate Now
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Image Section (30%) -->
                <div class="w-full lg:w-[30%] bg-gray-800 relative overflow-hidden">
                    <img src="/assets/images/donate/20944629.jpg" alt="Donation Impact"
                        class="absolute inset-0 w-full h-400px object-cover">

                    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
                    <div class="relative z-10 p-6 md:p-10 flex flex-col justify-center h-full text-white">
                        <h3 class="text-2xl font-bold mb-4">Your Support Makes a Difference</h3>
                        <p class="mb-6">Every donation helps us continue our mission and create positive change in
                            our communities.</p>

                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="bg-[var(--theme-color)] p-2 rounded-full mr-3">
                                    <i class="fas fa-hand-holding-heart"></i>
                                </div>
                                <span>Support community projects</span>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-[var(--theme-color)] p-2 rounded-full mr-3">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <span>Fund educational initiatives</span>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-[var(--theme-color)] p-2 rounded-full mr-3">
                                    <i class="fas fa-hospital"></i>
                                </div>
                                <span>Improve healthcare access</span>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-[var(--theme-color)] p-2 rounded-full mr-3">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <span>Promote sustainable development</span>
                            </div>
                        </div>
                        <div class="mt-8">
                            <p class="font-bold mb-2">Contact Us</p>
                            <div class="flex items-center mb-2">
                                <i class="fas fa-envelope mr-2"></i>
                                <a href="mailto:donations@example.org" class="hover:underline">donations@example.org</a>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-phone mr-2"></i>
                                <a href="tel:+12345678901" class="hover:underline">+1 (234) 567-8901</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Donation Methods Icons -->
            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-4">Secure Payment Methods</p>
                <div class="flex justify-center space-x-6">
                    <i class="fab fa-cc-visa text-3xl text-gray-600"></i>
                    <i class="fab fa-cc-mastercard text-3xl text-gray-600"></i>
                    <i class="fab fa-cc-amex text-3xl text-gray-600"></i>
                    <i class="fab fa-cc-discover text-3xl text-gray-600"></i>
                    <i class="fab fa-paypal text-3xl text-gray-600"></i>
                </div>
            </div>


        </div>


    </section>


    <!-- Styles for the Donation Page -->
    <style>
        /* Background Image for Donation Header */

        .background-container-donate {
            background-image: url('/assets/images/donate/piggy-bank-finance-savings-concept.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .background-container-donate .overlay {

            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8));
        }

        .background-container-donate .text-container {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
        }

        .background-container-donate .home-link {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .background-container-donate .contact-text {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Form Styling */
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 2rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
        }

        /* Responsive adjustments */
        @media (max-width: 1023px) {
            .background-container-donate .home-link {
                font-size: 2rem;
            }

            /* On mobile, stack the form and image */
            #donationForm {
                border-bottom: 1px solid #e2e8f0;
                padding-bottom: 2rem;
                margin-bottom: 2rem;
            }
        }
    </style>

@endsection


@push('scripts')

    <!-- JavaScript for the Donation Form -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const paymentMethods = document.getElementsByName('paymentMethod');
            const sections = {
                card: document.getElementById('cardPaymentMethod'),
                paypal: document.getElementById('paypalPaymentMethod'),
                bank: document.getElementById('bankPaymentMethod')
            };

            function togglePaymentSections() {
                const selectedMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
                for (const [method, section] of Object.entries(sections)) {
                    if (method === selectedMethod) {
                        section.classList.remove('hidden');
                    } else {
                        section.classList.add('hidden');
                    }
                }
            }

            paymentMethods.forEach(radio => {
                radio.addEventListener('change', togglePaymentSections);
            });

            // Initialize the display based on the default selected radio button
            togglePaymentSections();
        });

        // /////////////////////////////////////////////    
        document.addEventListener('DOMContentLoaded', function () {
            const donationInput = document.getElementById('donationAmount');

            donationInput.addEventListener('input', function (e) {
                // Remove all non-digit characters
                const value = e.target.value.replace(/\D/g, '');
                // Format the number with commas
                const formattedValue = Number(value).toLocaleString();
                // Update the input field with the formatted value
                e.target.value = formattedValue;
            });
        });
        LL


        document.addEventListener('DOMContentLoaded', function () {
            // Donation Amount Buttons
            const donationBtns = document.querySelectorAll('.donation-btn');
            const customAmountInput = document.getElementById('customAmount');

            donationBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    // Remove active class from all buttons
                    donationBtns.forEach(b => b.classList.remove('bg-[var(--theme-color)]',
                        'text-white'));

                    // Add active class to clicked button
                    this.classList.add('bg-[var(--theme-color)]', 'text-white');

                    // Set custom amount input to the button value
                    customAmountInput.value = this.textContent.trim().substring(1);
                });
            });
            // Clear active button when custom amount is entered
            customAmountInput.addEventListener('focus', function () {
                donationBtns.forEach(btn => btn.classList.remove('bg-[var(--theme-color)]', 'text-white'));
            });

            // Payment Method Toggles
            const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');
            const paymentSections = document.querySelectorAll('.payment-method-section');

            paymentMethods.forEach(method => {
                method.addEventListener('change', function () {
                    // Hide all payment sections
                    paymentSections.forEach(section => section.classList.add('hidden'));

                    // Show selected payment section
                    document.getElementById(`${this.value}PaymentMethod`).classList.remove(
                        'hidden');
                });
            });

            // Form Submission
            document.getElementById('donationForm').addEventListener('submit', function (e) {
                e.preventDefault();

                // Basic form validation
                const requiredFields = this.querySelectorAll('[required]');
                let isValid = true;

                requiredFields.forEach(field => {
                    if (!field.value) {
                        isValid = false;
                        field.classList.add('border-red-500');
                    } else {
                        field.classList.remove('border-red-500');
                    }
                });

                if (isValid) {
                    // Show success message (in production, this would submit to your payment processor)
                    alert(
                        'Thank you for your donation! You would now be redirected to complete the payment.');
                    // this.reset(); // Reset form after submission
                } else {
                    alert('Please fill in all required fields');
                }
            });
        });

        // UPLOADING IMAGE SCRIPT
        document.getElementById('transactionScreenshot').addEventListener('change', function (event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = ''; // Clear previous content

            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function handleImageUpload(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            // Remove any existing images in the preview container
                            const imagePreview = document.getElementById('imagePreview');
                            imagePreview.innerHTML = '';

                            // Create a new image element
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.alt = 'Transaction Screenshot';
                            img.classList.add('mt-2', 'w-40', 'h-40', 'border', 'border-gray-300',
                                'rounded-md');

                            // Append the image to the preview container
                            imagePreview.appendChild(img);
                        };
                        reader.readAsDataURL(file);
                    }
                }

                reader.readAsDataURL(file);
            } else {
                imagePreview.innerHTML = '<p class="text-sm text-gray-500">No image selected.</p>';
            }
        });
    </script>

@endpush