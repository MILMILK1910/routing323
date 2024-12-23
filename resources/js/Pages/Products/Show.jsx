import { Link } from "@inertiajs/react";
import { Head } from '@inertiajs/react';

//หน้าโชว์ข้อมูลของproduct
export default function Show({ products }) {
    return (
        <div>
            <div className="bg-white shadow">
                <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div className="py-8 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
                        <h2 className="text-xl font-semibold leading-tight text-gray-800">
                            Product Detial
                        </h2>
                    </div>
                </div>
            </div>
            <Head title={products.name} />
            <div className="py-8 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
                <div className="flex items-start space-x-8">
                    {/* เพิ่มแท็ก img เพื่อแสดงรูปภาพ */}
                    {products.image && (
                        <img
                            src={products.image}
                            alt={products.name}
                            style={{ maxWidth: "500px", height: "auto", maxHeight: "400px", marginTop: "16px" }}
                        />
                    )}
                    <div className="w-1/2">
                        <h1 className="text-3xl font-semibold">{products.name}</h1>
                        <p className="mt-4 text-gray-700 ">{products.description}</p>
                        <hr className="my-6  border-t border-gray-300" />
                        <p className="mt-4 font-bold text-xl mb-8">Price: ${products.price}</p>
                        <Link href="/products" className="inline-block px-5 py-2 text-white bg-red-600 rounded-xl hover:bg-red-700 ">Back To All Product </Link>
                    </div>
                </div>
            </div>
        </div>

    );
}
