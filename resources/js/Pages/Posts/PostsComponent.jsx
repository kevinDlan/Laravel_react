import React from "react";
import { Link } from "@inertiajs/inertia-react";



export default function PostComponent ()
{
    return (
        <div className="p-5">
            <h1 className="font-semibold text-xl text-gray-800 leading-tight">
                render Component With Controller
            </h1>
            <Link
                className="mt-2 btn btn-primary"
                as="button"
                type="button"
                href={route("post.create")}
            >
                Create
            </Link>
        </div>
    );
}