import Head from 'next/head'
import { BsFillMoonStarsFill } from "react-icons/bs";

// Design: https://dribbble.com/shots/18719635-Ahensy-Creative-Design-Agency-Landing-Page-Website
// Help: https://www.youtube.com/watch?v=k-Pi5ZMxHWY
// Command to start: npm run dev

export default function Home() {
  return (
    <div>
      <Head>
        <title>Blasix</title>
        <meta name="description" content="The official Blasix website" />
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className='bg-white px-10'>
        <section className='min-h-screen'>
          <nav className='py-10 mb-12 flex justify-between text-2xl lg:text-3xl'>
            <h1 className='text-2xl md:text-3xl lg:text-6xl font-quicksandB text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800'>Blasix</h1>
            <ul className='hidden gap-4 lg:gap-8  items-center font-quicksand md:flex '>
              <a href='#' >Services</a>
              <a href='#' >About</a>
              <a href='#' >My Projects</a>
              <a href='#' >Insight</a>
            </ul>
            <a href='#' className='hidden px-4 py-2 font-quicksand md:flex'>Contact Me</a>
            <a href='#' className='px-4 py-2 text-xl font-quicksand md:hidden'>Menu</a>
            {/* if screen is small then show the menu icon */}

          </nav>
          <div className='text-center md:text-start'>
            <h2 className='text-5xl  py-8 md:pl-10 font-quicksandB md:text-7xl'>Mobile<br />Development</h2>
            <h3 className='font-quicksand md:py-6 md:pl-20 md:text-3xl'>Blasix is a company made by Bas,<br />to create the best innovations &<br />world class quality solutions</h3>
            <ul className='flex py-6 md:pl-20 items-center font-quicksandB md:text-5xl' >
              <h1 >Lets Talk </h1>
              <h1 className='text-blue-700 px-4'> →</h1>
            </ul>
          </div>
        </section>
      </main>

      {/* <footer className='bg-gray-100 py-8 px-10'>
        <ul className='flex px-4 py-2 items-center text-6xl font-quicksandB'>
          <h1 >Knock@Blasix.com </h1>
          <h1 className='text-blue-700 px-4'> →</h1>
        </ul>
        <ul className='flex items-center font-quicksand text-xl'>
          <a href='#' className='px-4 py-4'>Services</a>
          <a href='#' className='px-4 py-4'>About</a>
          <a href='#' className='px-4 py-4'>My Projects</a>
          <a href='#' className='px-4 py-4'>Insight</a>
        </ul>
      </footer> */}

    </div>
  )
}
