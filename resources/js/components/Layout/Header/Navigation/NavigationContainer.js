import React, { Component } from "react";
import { NavLink } from "react-router-dom";

import GenderSelector from "./GenderSelector";
import UserNavigation from "./UserNavigation/UserNavigation";

class NavigationContainer extends Component {
    render() {
        return (
            <div className="bg-white">
                <div className="container mx-auto px-2">
                    <div className="flex items-center md:justify-between py-3">
                        <div className="w-1/4 md:hidden">
                            <svg
                                className="fill-current text-gray-darker h-8 w-8"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                            >
                                <path d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z" />
                            </svg>
                        </div>

                        {/* RIGHT SIDE */}
                        <GenderSelector />

                        {/* LOGO */}
                        <div className="w-1/3 md:w-auto text-center">
                            <NavLink to="/">
                                <img
                                    className="h-logo"
                                    src="https://media.dress-for-less.com/wcsstore/DFLStorefrontAssetStore/images/logo.svg"
                                    alt="dress-for-less"
                                />
                            </NavLink>
                        </div>

                        {/* RIGHT SIDE */}
                        <UserNavigation />
                    </div>
                </div>
            </div>
        );
    }
}

export default NavigationContainer;
