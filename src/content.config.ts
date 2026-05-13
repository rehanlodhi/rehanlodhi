import { defineCollection } from 'astro:content';
import { glob } from 'astro/loaders';
import { z } from 'zod';

const projects = defineCollection({
  loader: glob({ pattern: '**/*.json', base: './src/content/projects' }),
  schema: z.object({
    number: z.string(),
    category: z.string(),
    name: z.string(),
    description: z.string(),
    stack: z.array(z.string()),
    linkLabel: z.string(),
    url: z.string().url(),
    featured: z.boolean().default(false),
    order: z.number(),
    hasCaseStudy: z.boolean().default(false),
  }),
});

const caseStudies = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/content/case-studies' }),
  schema: z.object({
    heroImage: z.string().optional(),
  }),
});

const posts = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/content/posts' }),
  schema: z.object({
    title: z.string(),
    excerpt: z.string(),
    date: z.string(),
    category: z.string(),
    wpId: z.number().optional(),
  }),
});

export const collections = { projects, caseStudies, posts };
