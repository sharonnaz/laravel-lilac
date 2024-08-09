<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div id="app" class="container mt-5">
        <div class="search-box">
            <input v-model="search" type="text" placeholder="Search name/designation/department"
                class="form-control">
        </div>

        <div class="row">
            <div class="col-md-6" v-for="user in userFilter" :key="user.id">
                <div class="employee-card">
                    <h5>@{{ user.name }}</h5>
                    <p>@{{ user.designation.name }}</p>
                    <p>@{{ user.department.name }}</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                search: '',
                users: @json($users)
            },
            computed: {
                userFilter() {
                    let filteredUsers = this.users.filter(user => {
                        const searchTerm = this.search.toLowerCase();
                        return user.name.toLowerCase().includes(searchTerm) ||
                            user.designation.name.toLowerCase().includes(searchTerm) ||
                            user.department.name.toLowerCase().includes(searchTerm);
                    });

                    // filter users by name in ascending order
                    return filteredUsers.sort((a, b) => {
                        return a.name.toLowerCase().localeCompare(b.name.toLowerCase());
                    });
                }
            }
        });
    </script>
</body>

</html>
