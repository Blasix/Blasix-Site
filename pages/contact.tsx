import Head from 'next/head'
import { useState } from 'react';
import { BsFillMoonStarsFill } from "react-icons/bs";

export default function contact() {
    return (
        <div>
            <Head>
                <title>Blasix</title>
                <meta name="description" content="The official Blasix website" />
                <link rel="icon" href="/favicon.ico" />
            </Head>

            <main className='bg-white w-full overflow-hidden'>
                <div className='flex justify-center items-center sm:px-16 px-6'>
                    <div className='xl:max-w-[1920px] w-full'>
                        Contact Page a neef
                    </div>
                </div>
            </main>

            <footer className='bg-gray-100 py-8 px-4 md:px-10 w-full overflow-hidden'>
                <div className='flex justify-center items-center sm:px-16 px-6'>
                    <div className='xl:max-w-[1920px] w-full'>
                        <h1 className='flex pb-2 lg:pb-4 items-center text-3xl md:text-4xl lg:text-6xl font-quicksandB'>Knock@Blasix.com
                            <span className=' text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800 px-4'>➜</span>
                        </h1>
                        <li className='flex items-center font-quicksand text-xl lg:text-2xl gap-4 lg:gap-8'>
                            <a href='#home'>Home</a>
                            <a href='#about' >About </a>
                            <a href='#projects' >Projects </a>
                        </li>
                    </div>
                </div>
            </footer>

        </div>
    )
}
