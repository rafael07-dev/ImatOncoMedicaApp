import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";
import Table from "@/Components/Table";
import React from "react";

export default function Index({auth, equipos}){

    const colums = ['id', 'numero inventario', 'nombre', 'tipo', 'marca', 'modelo', 'serie', 'frecuencia', 'create at', 'update at'];

    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title="Equipos" />
            <Table colums={colums} data={equipos} />
        </AuthenticatedLayout>
    );
}