import React from "react";
import { NavLink } from "react-router-dom";
import { SocialIcon } from "react-social-icons";

export default function NavBar() {
    return (
        <header className="bg-blue-500">
            <div className="container mx-auto flex justify-between">
                <nav className="flex">
                    <NavLink to="/" 
                    exact 
                    activeClassName="text-white"
                    className="inline-flex items-center py-6 px-3 mr-4 text-red-100 hover:text-green-800 text-4xl font-bold cursive tracking-widest"
                    >
                        Troy Nicholls
                    </NavLink>
                    <NavLink to="/post" 
                    className="inline-flex items-center py-3 px-3 my-6 rounded text-red-200 hover:text-green-800"
                    activeClassName="text-red-100 bg-red-700"
                    >
                        Blog Posts
                    </NavLink>
                    <NavLink to="/project" 
                    className="inline-flex items-center py-3 px-3 my-6 rounded text-red-200 hover:text-green-800"
                    activeClassName="text-red-100 bg-red-700"
                    >
                        Projects
                    </NavLink>
                    <NavLink to="/about" 
                    className="inline-flex items-center py-3 px-3 my-6 rounded text-red-200 hover:text-green-800"
                    activeClassName="text-red-100 bg-red-700"
                    >
                        About Me!
                    </NavLink>
                </nav>
                <div className="inline-flex py-3 px-3 my-6">
                    <SocialIcon url="https://linkedin.com/in/troy-nicholls-4153214b/" className="mr-4" target="_blank" fgColor="#fff" style={{height:35, width:35}}/>
                    <SocialIcon network="twitter" url="https://twitter.com/TroyNicholls3" className="mr-4" target="_blank" fgColor="#fff" style={{height:35, width:35}}/>
                    <SocialIcon network="email" url="mailto:nicholls_troy@outlook.com" className="mr-4" target="_blank" fgColor="#fff" style={{height:35, width:35}}/>
                </div>
            </div>
        </header>
    )
}