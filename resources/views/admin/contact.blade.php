<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Contact Messages</h4>
                            <hr class="mb-2" />
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="tablesaw table mb-0 tablesaw-stack" data-tablesaw-mode="stack" id="tablesaw-1627">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">
                                                    id
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">
                                                    Name
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3">
                                                    email
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3">
                                                    phone
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3">
                                                    subject
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3">
                                                    view
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($contacts as $contact)
                                            <tr>
                                                <td>
                                                    {{ $contact->id }}
                                                </td>
                                                <td>
                                                    {{ $contact->name }}
                                                </td>
                                                <td>
                                                    {{ $contact->email }}
                                                </td>
                                                <td>
                                                    {{ $contact->phone }}
                                                </td>
                                                <td>
                                                    {{ $contact->subject }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('dashboard.contact.show', $contact->id ) }}">view</a>
                                                </td>
                                            </tr>
                                            @empty
                                            <p>No Messages</p>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->

</x-app-layout>