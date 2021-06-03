<div id="edit-profile" class="fixed flex h-screen hidden inset-0 items-center justify-center z-10">
{{-- card --}}
    <div class="absolute bg-white m-auto p-6 r-0 rounded-lg w-1/4">
        <div>
            <button onclick="closeEditProfile()" class="close-btn p-2 pl-4 pr-4 hover:bg-red-400 hover:text-white">&times;</button>
        </div>
        <div>
            <form onsubmit="return updateProfile()">
                <p class="account-type text-center mb-4">Edit Profile</p>
                <p id="username-edit-profileErrMsg" class=" text-xs text-center text-red-500"></p>
                <p class="mb-2 text-xs">Username</p>
                <input class="bg-gray-300 mb-2 p-2 rounded-lg text-center w-full" 
                        id="username-edit-profile"
                        required>
                <p id="email-edit-profileErrMsg" class=" text-xs text-center text-red-500"></p>
                <p class="mb-2 text-xs">Email</p>
                <input class="bg-gray-300 p-2 rounded-lg text-center w-full" 
                        id="email-edit-profile" type="email" 
                        required>
                <div class="flex justify-center mb-2 mt-4">
                    <button class="bg-blue-400 p-1 rounded-lg text-center text-white w-3/4">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>