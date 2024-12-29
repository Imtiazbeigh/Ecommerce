<!DOCTYPE html>
<html lang="en">

@include('backend.partials.head')

<body>

    <div class="admin">

        @include('backend.partials.sidebar')

        <div class="dashboard-info">
            @include('backend.partials.nav')
            <div class="wrap">
                <div class="title">
                    <h3>Listing</h3>
                    <a href="game-form.html">Add</a></div>
                <table>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Job Title</th>
                            <th>Twitter</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-column="First Name ">James</td>
                            <td data-column="Last Name ">Matman</td>
                            <td data-column="Job Title ">Chief Sandwich Eater</td>
                            <td data-column="Twitter ">@james</td>
                            <td data-column="Twitter " class="list-btns">
                                <a href="# " class="edit ">Edit</a>
                                <a href="# " class="del ">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td data-column="First Name ">Andor</td>
                            <td data-column="Last Name ">Nagy</td>
                            <td data-column="Job Title ">Designer</td>
                            <td data-column="Twitter ">@andornagy</td>
                            <td data-column="Twitter " class="list-btns">
                                <a href="# " class="edit ">Edit</a>
                                <a href="# " class="del ">Delete</a>
                            </td>

                        </tr>
                        <tr>
                            <td data-column="First Name ">Tamas</td>
                            <td data-column="Last Name ">Biro</td>
                            <td data-column="Job Title ">Game Tester</td>
                            <td data-column="Twitter ">@tamas</td>
                            <td data-column="Twitter " class="list-btns">
                                <a href="# " class="edit ">Edit</a>
                                <a href="# " class="del ">Delete</a>
                            </td>

                        </tr>
                        <tr>
                            <td data-column="First Name ">Zoli</td>
                            <td data-column="Last Name ">Mastah</td>
                            <td data-column="Job Title ">Developer</td>
                            <td data-column="Twitter ">@zoli</td>
                            <td data-column="Twitter " class="list-btns">
                                <a href="# " class="edit ">Edit</a>
                                <a href="# " class="del ">Delete</a>
                            </td>

                        </tr>
                        <tr>
                            <td data-column="First Name ">Szabi</td>
                            <td data-column="Last Name ">Nagy</td>
                            <td data-column="Job Title ">Chief Sandwich Eater</td>
                            <td data-column="Twitter ">@szabi</td>
                            <td data-column="Twitter " class="list-btns">
                                <a href="# " class="edit ">Edit</a>
                                <a href="# " class="del ">Delete</a>
                            </td>

                        </tr>
                    </tbody>
                </table>
               
            </div>

        </div>

    </div>

    
</body>

</html>