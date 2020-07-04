@extends('templates.master')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date Uploaded</th>
                <th>Date Updated</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $row) {
                    echo "<tr onclick='window.location.href=`/questions/$row->id`'>";
                    echo "<td>$row->title</td>";
                    echo "<td>$row->dateuploaded</td>";
                    echo "<td>$row->dateupdated</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
@endsection