<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff List</title>
</head>

<body>
    <button onclick="toggleStaffData()">แสดง/ปิดรายชื่อ staff</button>
    <div id="staffList"></div>

    <script>
        let staffVisible = false;

        function toggleStaffData() {
            const staffListDiv = document.getElementById('staffList');

            if (staffVisible) {
                staffListDiv.innerHTML = '';
                staffVisible = false;
            } else {
                fetch('https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json')
                    .then(response => response.json())
                    .then(data => {
                        displayStaff(data.people);
                        staffVisible = true;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        }

        function displayStaff(people) {
            const staffListDiv = document.getElementById('staffList');
            staffListDiv.innerHTML = '';

            people.forEach(person => {
                const personDiv = document.createElement('div');
                personDiv.innerHTML = `
                    <h2>${person.name}</h2>
                    <p><strong>Education:</strong> ${person.education}</p>
                    <p><strong>Role:</strong> ${person.role}</p>
                    <p><strong>Email:</strong> ${person.email}</p>
                    <p><strong>Phone:</strong> ${person.phone}</p>
                    <img src="${person.image}" alt="${person.name}'s profile picture" style="width: 150px; height: 150px;">
                `;
                staffListDiv.appendChild(personDiv);
            });
        }
    </script>
</body>

</html>