@extends('Layouts.default')

@section('content')
    <div>
        <div class="mt-5">
            <table style="width:100%">
                <tr>
                    <th>Name</th>
                    <th>Message</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Jordan</td>
                    <td>
                        <a href="https://rs925-miniproject1.herokuapp.com/card  ">
                            <div style="height:100%;width:100%">
                                A wonderful site
                            </div>
                        </a>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary col-lg-6">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Edward</td>
                    <td>
                        <a href="https://rs925-miniproject1.herokuapp.com/card">
                            <div style="height:100%;width:100%">
                                Really helpful
                            </div>
                        </a>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary col-lg-6">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Maya</td>
                    <td>
                        <a href="https://rs925-miniproject1.herokuapp.com/card">
                            <div style="height:100%;width:100%">
                                Nice Work
                            </div>
                        </a>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary col-lg-6">Delete</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection