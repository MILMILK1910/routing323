import { Link } from "@inertiajs/react";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import React from 'react';
import { Head } from '@inertiajs/react';

//หน้าproduct

export default function Index({ products }) {
    return (
        <>
            <AuthenticatedLayout
                header={
                    <h2 className="text-xl font-semibold leading-tight text-gray-800">
                        Product
                    </h2>
                }
            >
                <Head title="Product" />
                <hr />
                <div className="py-12 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
                    <div>
                        <ul className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            {products.map((product) => (
                                <li key={product.id} className="p-4 border border-gray-300 rounded-lg shadow-sm bg-gray-50 flex flex-col justify-between">
                                    <Link href={`/products/${product.id}`} className="block">
                                        {product.image && (
                                            <div className="w-full h-64 overflow-hidden rounded-lg mb-4">
                                                <img
                                                    src={product.image}
                                                    alt={product.name}
                                                    className="w-full h-full object-cover"
                                                />
                                            </div>
                                        )}
                                        <div className="text-lg font-medium ">{product.name}</div>
                                        <p className="text-right text-base text-gray-500">${product.price}</p>
                                    </Link>
                                </li>
                            ))}
                        </ul>
                    </div>
                </div>
            </AuthenticatedLayout>
        </>
    );
}
