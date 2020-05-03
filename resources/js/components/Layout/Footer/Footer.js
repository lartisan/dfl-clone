import React from "react";

// import classes from './Footer.css'

const Footer = props => {
    return (
        <div className=" bg-gray-lighter p-8">
            <div className="sm:flex mb-4">
                <div className="sm:w-1/4 h-auto">
                    <div className="text-orange mb-2">Orange</div>
                    <ul className="list-reset leading-normal">
                        <li className="hover:text-orange text-gray-darker">
                            One
                        </li>
                        <li className="hover:text-orange text-gray-darker">
                            Two
                        </li>
                        <li className="hover:text-orange text-gray-darker">
                            Three
                        </li>
                        <li className="hover:text-orange text-gray-darker">
                            Four
                        </li>
                        <li className="hover:text-orange text-gray-darker">
                            Five
                        </li>
                        <li className="hover:text-orange text-gray-darker">
                            Six
                        </li>
                        <li className="hover:text-orange text-gray-darker">
                            Seven
                        </li>
                        <li className="hover:text-orange text-gray-darker">
                            Eight
                        </li>
                    </ul>
                </div>

                <div className="sm:w-1/4 h-auto sm:mt-0 mt-8">
                    <div className="text-blue mb-2">Blue</div>
                    <ul className="list-reset leading-normal">
                        <li className="hover:text-blue text-gray-darker">
                            One
                        </li>
                        <li className="hover:text-blue text-gray-darker">
                            Two
                        </li>
                        <li className="hover:text-blue text-gray-darker">
                            Three
                        </li>
                    </ul>

                    <div className="text-blue-light mb-2 mt-4">Blue-light</div>
                    <ul className="list-reset leading-normal">
                        <li className="hover:text-blue-light text-gray-darker">
                            One
                        </li>
                        <li className="hover:text-blue-light text-gray-darker">
                            Two
                        </li>
                        <li className="hover:text-blue-light text-gray-darker">
                            Three
                        </li>
                    </ul>
                </div>

                <div className="sm:w-1/4 h-auto sm:mt-0 mt-8">
                    <div className="text-green-dark mb-2">Green-dark</div>
                    <ul className="list-reset leading-normal">
                        <li className="hover:text-green-dark text-gray-darker">
                            One
                        </li>
                        <li className="hover:text-green-dark text-gray-darker">
                            Two
                        </li>
                        <li className="hover:text-green-dark text-gray-darker">
                            Three
                        </li>
                    </ul>

                    <div className="text-green-light mb-2 mt-4">
                        Green-light
                    </div>
                    <ul className="list-reset leading-normal">
                        <li className="hover:text-green-light text-gray-darker">
                            One
                        </li>
                        <li className="hover:text-green-light text-gray-darker">
                            Two
                        </li>
                        <li className="hover:text-green-light text-gray-darker">
                            Three
                        </li>
                    </ul>
                </div>

                <div className="sm:w-1/2 sm:mt-0 mt-8 h-auto">
                    <div className="text-red-light mb-2">Newsletter</div>
                    <p className="text-gray-darker leading-normal">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Commodi, consectetur.{" "}
                    </p>
                    <div className="mt-4 flex">
                        <input
                            type="text"
                            className="p-2 border border-gray-light round text-gray-dark text-sm h-auto"
                            placeholder="Your email address"
                        />
                        <button className="bg-orange text-white rounded-sm h-auto text-xs p-3">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Footer;
