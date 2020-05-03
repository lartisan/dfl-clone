import React from 'react'

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faSearch } from '@fortawesome/free-solid-svg-icons'

const PromoBar = () => (
	<div className="bg-white md:block border-dotted border-b border-black mb-2">
		<div className="flex">
			<div className="w-1/2 px-4 py-2 my-auto">
				<p className="text-sm text-red">Sign up for the newsletter now and get your 10% voucher!</p>
			</div>
			<div className="w-1/2 py-1 flex items-center">
				<div className="flex flex-wrap items-stretch w-full pl-20">
					<input type="text" className="z-0 flex-shrink flex-grow flex-auto leading-normal w-px flex-1 h-7 border border-r-0 border-black px-3 relative focus:outline-none" placeholder="Your search term" />
					<div className="flex mr-px">
						<button className="flex items-center leading-normal border border-l-0 border-black px-3 whitespace-no-wrap text-black text-sm focus:outline-none content-box">
							<FontAwesomeIcon icon={faSearch} />
						</button>
					</div>	
				</div>
			</div>
		</div>
	</div>
)

export default PromoBar